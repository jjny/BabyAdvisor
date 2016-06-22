<?php

namespace ConnexionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BabyAdvisorBundle\Entity\User;
use BabyAdvisorBundle\Entity\Tranche_age;
use BabyAdvisorBundle\Entity\Centre_interet;
use BabyAdvisorBundle\Repository;

class InscriptionController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {

        $em = $this->container->get('doctrine')->getManager();
        $users= $em->getRepository('BabyAdvisorBundle:User')->findAll();
        
        $form = $this->createForm('ConnexionBundle\Form\Type\inscriptionType');

        $session = $request->getSession();
         $session->start();
          $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.{8,16})(?!.*[\s])/';

        if ($request->isMethod('POST'))
        {

            $form->handleRequest($request);

            if ($form->isValid())
            {  
                //die("test");
                foreach ($users as $u) {
                    if($u->getPseudo()==$_POST['inscription']['pseudo']){

                         $session->getFlashBag()->add('info', 'Votre pseudo est déjà utilisé,veuillez en choice un autre');
                    }elseif ($u->getAdresseMail()==$_POST['inscription']['email']) {
                         $session->getFlashBag()->add('info', 'Cet email est déjà utilisé'); 
                    }elseif (strlen($_POST['inscription']['cp']) >5 || strlen($_POST['inscription']['cp'])<5) {   
                        $session->getFlashBag()->add('info', 'le code postal doit contenir 5 chiffres'); 
                    }elseif (!preg_match($pattern, $_POST['inscription']['motDePasse'])) {
                         $session->getFlashBag()->add('info', 'Le mot de passe doit contenir entre 8 et 16 carctéres avec au moins  1 lettre,1 chiffre et 1 majuscule');

                    }elseif ($_POST['inscription']['motDePasse']!=$_POST['inscription']['motDePasseConfirmation']) {
                        $session->getFlashBag()->add('info', 'La confirmation du mot de passe est différent');

                        
                    } else {
                         $session->getFlashBag()->add('info', 'Vous pouvez dés à présent vous connecter');
                        if($_POST['inscription']['nombreEnfant']!=0){
                            $age = $_POST['inscription']['trancheAge'];
                        } else {
                            $age = null;
                        }  
                         $interet = $_POST['inscription']['centreInterets'];
                         $pseudoNew = $_POST['inscription']['pseudo'];

                         $em2 = $this->container->get('doctrine')->getManager();
                          $user = new User();
                             $where = null;
                             
                            if($age!=null){
                                foreach($age as $id)
                                {
                                    if(is_null($where))
                                    {
                                        $where = $id;
                                    }
                                    else
                                    {
                                        $where .= ',' . $id;
                                    }
                                }
                               
                               
                                 $age2 = $em2->getRepository('BabyAdvisorBundle:Tranche_age')->findTrancheAgebyId($where);
                               
                                foreach ($age2 as  $a) {
                                    $user ->addTranchesAge($a);
                                }

                            } 
                            $where = null;
                            foreach($interet as $id)
                            {
                                if(is_null($where))
                                {
                                    $where = $id;
                                }
                                else
                                {
                                    $where .= ',' . $id;
                                }
                            }
                            
                             $interet2 = $em2->getRepository('BabyAdvisorBundle:Centre_interet')->findCentreInteretbyId($where);

                             foreach ($interet2 as  $in) {
                                $user ->addCentreInterets($in);
                            }



                          $user->setPseudo($_POST['inscription']['pseudo']);
                         $user ->setAdresseMail($_POST['inscription']['email']);
                         $user ->setPassword($_POST['inscription']['motDePasse']);
                         $user ->setNom($_POST['inscription']['nom']);
                         $user ->setPrenom($_POST['inscription']['prenom']);
                         $user ->setCP($_POST['inscription']['cp']);
                         $user ->setAdresse($_POST['inscription']['adresse']);
                         $user ->setVille($_POST['inscription']['ville']);
                         $user ->setRole('ROLE_USER');


                         $em = $this->getDoctrine()->getManager();
                         $em->persist($user);
                         $em->flush();

                        return $this->redirectToRoute('homepage');
                    }     
                 }
            }
            
        }


        return $this->render(
            'ConnexionBundle:connexion:inscription.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    public function checkInsciptionAction(Request $request){



        return $this->redirectToRoute('homepage');
    }

}