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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use BabyAdvisorBundle\Entity\Centre_interet;
use BabyAdvisorBundle\Entity\Tranche_age;
use Symfony\Component\Form\Extension\Core\Type as Type;

class ajouterArticleType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              ->add('titre', TextType::class, array('label' => 'Titre', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('adresse', TextType::class, array('label' => 'Adresse', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('ville', TextType::class, array('label' => 'Ville', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('cp', NumberType::class, array('label' => 'Code postal', 'attr' => array('class' => 'form-control', 'placeholder' => '', 'maxlenght' => 5, 'size' => 5), 'scale' => 0))
            ->add('description', TextareaType::class, array('label' => 'Description', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
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
             ->add('photos', FileType::class, array(
                        'label' => 'Ajouter des photos',
                        'multiple' => true,
                        'required' => false
               ))
             ->add('horaires', CollectionType::class, array(
                  'entry_type'   => horairesType::class,
                  'allow_add'    => true,
                  'allow_delete' => true

                ))
            ->add('Ajouter', SubmitType::class);
    }

    }
