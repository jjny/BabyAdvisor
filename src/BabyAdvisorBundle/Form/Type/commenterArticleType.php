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

class commenterArticleType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              ->add('texte', TextareaType::class, array('label' => 'Votre commentaire', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
             
             ->add('Valider', SubmitType::class);
             
    }


    }
