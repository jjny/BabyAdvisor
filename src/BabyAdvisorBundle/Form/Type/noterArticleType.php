<?php

namespace BabyAdvisorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type as Type;
use BabyAdvisorBundle\Entity\Horaire;

class noterArticleType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('proprete', ChoiceType::class, array('label' => 'Proprete',
            'choices'  => array(
                '0' => 0,
                '1' => 1,
                '2' => 2,
                '3' => 3,
                '4' => 4,
                '5' => 5
                ),
             'expanded' => true,
            'multiple' => false,))
             ->add('accessibilite', ChoiceType::class, array('label' => 'Accessibilite',
            'choices'  => array(
                '0' => 0,
                '1' => 1,
                '2' => 2,
                '3' => 3,
                '4' => 4,
                '5' => 5
                ),
             'expanded' => true,
            'multiple' => false,))
             ->add('encadrement', ChoiceType::class, array('label' => 'Encadrement',
            'choices'  => array(
                '0' => 0,
                '1' => 1,
                '2' => 2,
                '3' => 3,
                '4' => 4,
                '5' => 5
                ),
             'expanded' => true,
            'multiple' => false,))
               ->add('ambiance', ChoiceType::class, array('label' => 'Ambiance',
            'choices'  => array(
                '0' => 0,
                '1' => 1,
                '2' => 2,
                '3' => 3,
                '4' => 4,
                '5' => 5
                ),
            'expanded' => true,
            'multiple' => false,))
             ->add('equipement', ChoiceType::class, array('label' => 'Equipement',
            'choices'  => array(
                '0' => 0,
                '1' => 1,
                '2' => 2,
                '3' => 3,
                '4' => 4,
                '5' => 5
                ),
             'expanded' => true,
            'multiple' => false,))
             ->add('Noter', SubmitType::class);
             
    }


    }
