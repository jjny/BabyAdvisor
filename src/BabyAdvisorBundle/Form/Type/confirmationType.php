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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type as Type;

class confirmationType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('supprimer', CheckboxType::class, array('label' => 'Valider','attr' => array('class' => 'form-control', 'placeholder' => '','required' => false)))
            ->add('Supprimer', SubmitType::class);
    }

    }
