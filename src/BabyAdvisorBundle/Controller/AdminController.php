<?php

namespace BabyAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/")
     */
    public function confirmationAction()
    {

         $form = $this->createForm('BabyAdvisorBundle\Form\Type\supprimerType');


    return $this->render('BabyAdvisorBundle:BabyAdvisor:adminSuppresion.html.twig', array(
        'form' => $form->createView()

    ));


        
    }

  




}
