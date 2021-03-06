<?php

namespace BabyAdvisorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type as Type;

class annulerType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              ->add('annuler', ChoiceType::class, array('label' => 'Voulez-vous vraiment annuler le signalement de ce post ?',
				    'choices'  => array(
				        'Oui' => true,
				        'Non' => false),
				    'expanded' => true))
            ->add('Valider', SubmitType::class);
    }

    }
