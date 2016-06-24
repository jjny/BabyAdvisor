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

class horairesType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('Jour', ChoiceType::class, array('label' => 'jour(s)',
            'choices'  => array(
                'Lundi' => "Lundi",
                'Mardi' => "Mardi",
                'Mercredi' => "Mercredi",
                'Jeudi' => "Jeudi",
                'Vendredi' => "Vendredi",
                'Samedi' => "Samedi",
                'Dimanche' => "Dimanche"
                ),
            'expanded' => true,
            'multiple' => true,))
             ->add('HeureDeb', TimeType::class, array('label' => 'Heure de début',
                  'input'  => 'datetime',
                  'widget' => 'single_text',
              ))
             ->add('HeureFin', TimeType::class, array('label' => 'Heure de fin',
                  'input'  => 'datetime',
                  'widget' => 'single_text',
              ))

             ;
    }


     public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'BabyAdvisorBundle\Entity\Horaire'
    ));
  }

    }
