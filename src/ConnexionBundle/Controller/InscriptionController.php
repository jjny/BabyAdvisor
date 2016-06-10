<?php

namespace ConnexionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class InscriptionController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

    	$form = $this->createForm('ConnexionBundle\Form\Type\inscriptionType');

        return $this->render(
            'ConnexionBundle:connexion:inscription.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

}