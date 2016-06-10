<?php
/**
 * Created by PhpStorm.
 * User: fr120940
 * Date: 04/05/2016
 * Time: 11:27
 */

namespace ConnexionBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type as Type;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class inscriptionType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('label' => 'Nom', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('prenom', TextType::class, array('label' => 'Prénom', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('pseudo', TextType::class, array('label' => 'Pseudo', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('email', EmailType::class, array('label' => 'Email', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('motDePasse', PasswordType::class, array('label' => 'Mot de passe', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
             ->add('motDePasseConfirmation', PasswordType::class, array('label' => 'Confirmez votre mot de passe', 'attr' => array('class' => 'form-control', 'placeholder' => '')))

             ->add('nombreEnfant', ChoiceType::class, array('label' => 'Combien d\'enfant savez vous', 'attr' => array('class' => 'form-control', 'placeholder' => ''),'choices' => array(
																	        		'0' => 0,
																	        		'1' => 1,
																	        		'2' => 2,
    				),'multiple' => true,'expanded' => true))

             ->add('ageEnfant', ChoiceType::class, array('label' => 'Quelle age ont nos vos enfants', 'attr' => array('class' => 'form-control', 'placeholder' => ''),'choices' => array(
																	        		'pas d\'enfant' => null,
																	        		'moins d\'un an' => 0,
																	        		'+ 1 an' => 1,
																	        		'+ 2 ans' => 2,
																	        		'+ 3 ans' => 3,
																	        		'+ 4 ans' => 4,
																	        		'+ 5 ans' => 5,
																	        		'6-8 ans' => 6,
																	        		'8-10 ans' => 7,
    				),'multiple' => true,'expanded' => true))
            ->add('Valider', SubmitType::class);


               $builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) {
            // ... adding the name field if needed
        });
    }

}
