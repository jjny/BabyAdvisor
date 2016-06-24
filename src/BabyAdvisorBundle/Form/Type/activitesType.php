<?php

namespace BabyAdvisorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type as Type;
use BabyAdvisorBundle\Entity\Activite;

class activitesType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('libelle', TextType::class, array('label' => 'Nom de l\'activité', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
             ->add('tarif', TextType::class, array('label' => 'Tarif', 'attr' => array('class' => 'form-control', 'placeholder' => '')))

             ;
    }


     public function configureOptions(OptionsResolver $resolver)
    {
      $resolver->setDefaults(array(
        'data_class' => 'BabyAdvisorBundle\Entity\Activite'
      ));
    }

    }
