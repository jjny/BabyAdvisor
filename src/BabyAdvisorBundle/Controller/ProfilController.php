<?php

namespace BabyAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ProfilController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
    	$session = $request->getSession();
    	$em = $this->container->get('doctrine')->getManager();
        $userInfo = $em->getRepository('BabyAdvisorBundle:User')->findOneBy(array('id' => $session->get('userId')));
        $signalement = $em->getRepository('BabyAdvisorBundle:EstSignale')->findOneBy(array('User' => $session->get('userId')));

        return $this->render(
        	'BabyAdvisorBundle:BabyAdvisor:profil.html.twig',
        	array(
        		'userInfo' => $userInfo,
        		'signalement' => $signalement
        	)
        );
    }
}