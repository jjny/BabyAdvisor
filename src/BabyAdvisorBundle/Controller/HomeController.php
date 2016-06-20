<?php

namespace BabyAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BabyAdvisorBundle\Entity\Article;
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
        //exit(dump($em->getConfiguration()->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger())));
        $session = $request->getSession();
        $session->start();

        dump($topArticle);
        die();

    	if ($session->get('userRole')=='ROLE_ADMIN'){

        $em = $this->container->get('doctrine')->getManager();
        $commentaireSignal= $em->getRepository('BabyAdvisorBundle:Commentaire')->findBy(
              array('Signale' => '1')
                );

    		return $this->render('BabyAdvisorBundle:BabyAdvisor:admin.html.twig', array(

                'commentaires' => $commentaireSignal));
    	}
    	elseif ($session->get('userRole')=='ROLE_USER'){
        
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
