<?php
/**
 * Created by PhpStorm.
 * User: fr120940
 * Date: 04/05/2016
 * Time: 11:27
 */

namespace BabyAdvisorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type as Type;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use BabyAdvisorBundle\Entity\Centre_interet;
use BabyAdvisorBundle\Entity\Tranche_age;

class rechercheType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        //->add('nom', TextType::class, array('label' => 'Nom', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
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
        ->add('ville', TextType::class, array('label' => 'Ville', 'required' => false, 'attr' => array('class' => 'form-control', 'placeholder' => 'Paris, 75000, ...')))
        //->add('localisation', CheckboxType::class, array('label' => 'Localisez-moi', 'required' => false))
        ->add('cp', HiddenType::class, array('data' => ''))
        ->add('localisation', ButtonType::class, array('attr' => array('class' => 'save')))
        ->add('Valider', SubmitType::class);
    }



}
