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
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type as Type;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use BabyAdvisorBundle\Entity\Centre_interet;
use BabyAdvisorBundle\Entity\Tranche_age;

class inscriptionType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('label' => 'Nom', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('prenom', TextType::class, array('label' => 'Prénom', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('pseudo', TextType::class, array('label' => 'Pseudo', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('email', EmailType::class, array('label' => 'Email', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
             ->add('adresse', TextType::class, array('label' => 'Adresse', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
              ->add('ville', TextType::class, array('label' => 'Ville', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('cp', NumberType::class, array('label' => 'Code postal', 'attr' => array('class' => 'form-control', 'placeholder' => '', 'maxlenght' => 5, 'size' => 5), 'scale' => 0))
            ->add('motDePasse', PasswordType::class, array('label' => 'Mot de passe', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
             ->add('motDePasseConfirmation', PasswordType::class, array('label' => 'Confirmez votre mot de passe', 'attr' => array('class' => 'form-control', 'placeholder' => '')))

             ->add('nombreEnfant', ChoiceType::class, array( 'label' => 'Combien d\'enfant avez vous', 'attr' => array('class' => 'form-control', 'placeholder' => ''),
                    'data' => 0,'choices' => array(
																	        		'0' => 0,
																	        		'1' => 1,
																	        		'2' => 2,
    				),'expanded' => true))

            // ->add('anniv', TextType::class, array('label' => 'anniversaire', 'attr' => array('class' => 'form-control', 'placeholder' => ''), "full_name"=> "inscription[anniv][]"))
             ->add('anniv', TextType::class, array('label' => 'anniversaire', 'attr' => array('class' => 'form-control','placeholder' => '')))

             
             ->add('trancheAge', EntityType::class, array(
                        'label' => 'Tranche d\'age',
                        'class' => 'BabyAdvisorBundle:Tranche_age',
                        'choice_label' => 'Libelle',
                        'multiple' => true,
                        'expanded' => true,
        ))


             ->add('centreInterets', EntityType::class, array(
                        'class' => 'BabyAdvisorBundle:Centre_interet',
                        'choice_label' => 'Libelle',
                        'multiple' => true,
                        'expanded' => true,
        ))

             //$options['data']->centre_interet


            ->add('Valider', SubmitType::class);
    }



}
