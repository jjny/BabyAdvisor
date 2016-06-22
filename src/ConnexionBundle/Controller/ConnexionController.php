<?php

namespace ConnexionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\AccessMap;
use Symfony\Component\HttpFoundation\RequestMatcher;
use Symfony\Component\Security\Http\Firewall\AccessListener;

class ConnexionController extends Controller
{
    /**
     * @Route("/")
     */
    public function loginAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        $users= $em->getRepository('BabyAdvisorBundle:User')->findAll();

        $form = $this->createForm('ConnexionBundle\Form\Type\connexionType');

        $messageFlash=false;
        $session = $request->getSession();

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
           
            if ($form->isValid())
            {

                foreach($users as $u)
                {

                    if ($u->getPseudo()==$_POST['connexion']['username'] && $u->getPassword()==$_POST['connexion']['password'])
                    {
                        $session->set('userId', $u->getId());
                        $session->set('userRole', $u->getRole());
                        return $this->redirectToRoute('homepage');

                    }else{
                        $messageFlash=true;
                    }

                }
            }
        }

        if($messageFlash==true) {

            $session->getFlashBag()->add('info', 'Le pseudo et/ou le mot de passe est(sont) incorrecte(s)');
        }

        return $this->render(
            'ConnexionBundle:connexion:login.html.twig', 
            array(
    	       'form' => $form->createView()
            )
        );
    }

  /*

    	$form = $this->createForm('ConnexionBundle\Form\Type\connexionType');

        return $this->render(
            'ConnexionBundle:connexion:login.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }*/


    public function loginCheckAction(Request $request)
    {
    	$em = $this->container->get('doctrine')->getManager();
        $users= $em->getRepository('BabyAdvisorBundle:User')->findAll();
        $pseudo= $_POST['_username'];
        $motDePasse=$_POST['_password'];

        $session = $request->getSession();

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            if ($form->isValid())
            {
                foreach($users as $u)
                {
                    if ($u['pseudo']==$pseudo && $u['password']==$motDePasse)
                    {
                        $session->set('userId', $u['id']);

                        return $this->redirectToRoute('homepage');
                    }
                }
            }
        }
        $session->getFlashBag()->add('info', 'Login/Mot de passe incorrecte');
        return $this->redirectToRoute('login');
    }


    public function logoutAction(Request $request)
    {
        $session = $request->getSession();
        $session->clear();

        return $this->redirectToRoute('homepage');
    }

}
