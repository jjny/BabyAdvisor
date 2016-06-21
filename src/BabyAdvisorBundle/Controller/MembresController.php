<?php

namespace BabyAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MembresController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
    	$em = $this->container->get('doctrine')->getManager();
        $allUser = $em->getRepository('BabyAdvisorBundle:User')->findAll();
        //exit(dump($allActivite));
        return $this->render(
            'BabyAdvisorBundle:BabyAdvisor:membres.html.twig',
            array(
                'users' => $allUser
                )
            );
    }
}