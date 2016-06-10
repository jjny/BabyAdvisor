<?php

namespace ConnexionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ConnexionController extends Controller
{
    /**
     * @Route("/")
     */

    	public function loginAction(Request $request)

  {

    
    $authenticationUtils = $this->get('security.authentication_utils');

    $form = $this->createForm('ConnexionBundle\Form\Type\connexionType');


    return $this->render('ConnexionBundle:connexion:login.html.twig', array(
    	'form' => $form->createView(),

      'last_username' => $authenticationUtils->getLastUsername(),

      'error'         => $authenticationUtils->getLastAuthenticationError(),

    ));

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
    	  	$authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();


    	 $session = $request->getSession();

         // return $this->render('BabyAdvisorBundle:Home:home.html.twig');
          return $this->redirectToRoute('homepage');
       
    }


     public function logoutAction(Request $request){

        $session = $request->getSession();

        $session->clear();

        return $this->redirectToRoute('homepage');


    }

}
