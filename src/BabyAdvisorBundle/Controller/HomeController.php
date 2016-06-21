<?php

namespace BabyAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BabyAdvisorBundle\Entity\Article;
use BabyAdvisorBundle\Entity\Horaire;
use BabyAdvisorBundle\Entity\Commentaire;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        $topArticle = $em->getRepository('BabyAdvisorBundle:Article')->findTopArticle();

        $lastArticle = $em->getRepository('BabyAdvisorBundle:Article')->findlastArticles();

        $session = $request->getSession();
        $session->start();

    	if ($session->get('userRole')=='ROLE_ADMIN'){

        $em = $this->container->get('doctrine')->getManager();
        $commentaireSignal= $em->getRepository('BabyAdvisorBundle:Commentaire')->findBy(
              array('Signale' => '1')
                );

    		return $this->render(
                'BabyAdvisorBundle:BabyAdvisor:admin.html.twig', 
                array(
                    'commentaires' => $commentaireSignal
                    )
                );
    	}
    	elseif ($session->get('userRole')=='ROLE_USER'){
        
    		return $this->render('BabyAdvisorBundle:BabyAdvisor:homeMembre.html.twig');
    	}
    	else{
    		return $this->render(
                'BabyAdvisorBundle:BabyAdvisor:home.html.twig',
                array(
                    'topArticle' => $topArticle,
                    'lastArticle' => $lastArticle
                    )
                );
    	}
        
    }
    public function rechercheAction()
    {
        return $this->render(
            'BabyAdvisorBundle:BabyAdvisor:recherche.html.twig'
            );
    }

    public function signalerAction()
    {
         $form_signaler = $this->createForm('BabyAdvisorBundle\Form\Type\signalerType');

        return $this->render(
            'BabyAdvisorBundle:BabyAdvisor:confirmationSignalement.html.twig',
                array(
                    'form' => $form_signaler->createView()
                ));
    }

    public function viewAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $articleView = $em->getRepository('BabyAdvisorBundle:Article')->findOneBy(array('id' => $id));
        //exit(dump($articleView));
        return $this->render(
            'BabyAdvisorBundle:BabyAdvisor:view.html.twig',
            array(
                'article' => $articleView 
                )
            );
    }

    public function ajouterArticleAction(Request $request){
        $session = $request->getSession();

        if($session->get('userRole')=='ROLE_ADMIN' || $session->get('userRole')=='ROLE_USER'){


                        $form = $this->createForm('BabyAdvisorBundle\Form\Type\ajouterArticleType');

                          if ($request->isMethod('POST'))
                        {

                            $form->handleRequest($request);

                            if ($form->isValid())
                            {  

                                if (strlen($_POST['ajouter_article']['cp']) >5 || strlen($_POST['ajouter_article']['cp'])<5) {   
                                        $session->getFlashBag()->add('info', 'le code postal doit contenir 5 chiffres'); 
                                }else{


                                    $em2 = $this->container->get('doctrine')->getManager();
                                    $article = new Article();

                                    $interet = $_POST['ajouter_article']['centreInterets'];
                                    $age = $_POST['ajouter_article']['trancheAge'];
                                    $horaires = $_POST['ajouter_article']['horaires'];
                                    $listHoraire=array();
                                    $userId=$session->get('userId');
                                    $user= $em2->getRepository('BabyAdvisorBundle:User')->findOneBy(array('id'=>$userId));

                                    


                                    foreach($horaires as $key)
                                        {                 
                                            foreach($key['Jour'] as $jour)
                                            {                                 
                                                    $horaire = new Horaire();
                                                    $horaire->setJour($jour);
                                                    $horaire->setHeureDeb($key['HeureDeb']);
                                                    $horaire->setHeureFin($key['HeureFin']);

                                                    array_push($listHoraire, $horaire);    
                                          }       
                                        }



                                   // foreach ($listHoraire as  $l) {
                                     //  $article ->addHoraire($l);
                                    //}    

                                               

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
                                                    $article ->addTranchesAge($a);
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
                                                $article ->addCategory($in);
                                            }

                                         //   $dateCurrent=date("YYYY-MM-DD H:i:s"); 
                                           //$dateCurrent2 = \DateTime::createFromFormat('YYYY-MM-DD', $dateCurrent);
                                         

                                            $article->setTitre($_POST['ajouter_article']['titre']);
                                            $article->setAdresse($_POST['ajouter_article']['adresse']);
                                            $article->setDescription($_POST['ajouter_article']['description']);
                                            $article->setVille($_POST['ajouter_article']['ville']);
                                            $article->setCP($_POST['ajouter_article']['cp']);
                                            $article->setSignale(false);
                                            $article->setUser($user);

                                           // $article->setDateCrea($dateCurrent);

                                            $em = $this->getDoctrine()->getManager();
                                            $em->persist($article);


                                            $em->flush();


                                            



                                        }




                                    }
                            }
                        }        



                        return $this->render(
                            'BabyAdvisorBundle:BabyAdvisor:ajouterArticle.html.twig',
                                array(
                                    'form' => $form->createView()
                                ));


                    }//fin if role
                    else{
                        $session->getFlashBag()->add('info', 'Vous devez vous connecter afin d\'ajouter un nouvel article'); 
                        return $this->redirectToRoute('login');
                    }

    }

}
