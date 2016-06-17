<?php

namespace BabyAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BabyAdvisorBundle\Entity\Tranche_age;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->container->get('doctrine')->getManager();
        $topArticle = $em->getRepository('BabyAdvisorBundle:Tranche_age')->findTrancheAgebyId(1);

    	if ($securityContext = $this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
    		return $this->render('BabyAdvisorBundle:BabyAdvisor:admin.html.twig');
    	}
    	elseif ($securityContext = $this->container->get('security.authorization_checker')->isGranted('ROLE_USER')){
    		return $this->render('BabyAdvisorBundle:BabyAdvisor:homeMembre.html.twig');
    	}
    	else{
    		return $this->render(
                'BabyAdvisorBundle:BabyAdvisor:home.html.twig',
                array(
                    'topArticle' => $topArticle 
                ));
    	}
        
    }
    public function rechercheAction()
    {
        return $this->render(
            'BabyAdvisorBundle:BabyAdvisor:recherche.html.twig'
            );
    }
}
