<?php

namespace BabyAdvisorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type as Type;

class signalerType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Signaler', SubmitType::class);
    }

    }
