<?php

namespace BabyAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

    	if ($securityContext = $this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
    		return $this->render('BabyAdvisorBundle:BabyAdvisor:admin.html.twig'
    			);
    	}
    	elseif ($securityContext = $this->container->get('security.authorization_checker')->isGranted('ROLE_USER')){
    		return $this->render('BabyAdvisorBundle:BabyAdvisor:homeMembre.html.twig');
    	}
    	else{
    		return $this->render('BabyAdvisorBundle:BabyAdvisor:home.html.twig');
    	}
        
    }

  




}
