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
use Symfony\Component\Form\Extension\Core\Type as Type;

class supprimerType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              ->add('supprimer', ChoiceType::class, array('label' => 'Voulez-vous vraiment supprimer ce post ?',
				    'choices'  => array(
				        'Oui' => true,
				        'Non' => false),
				    'expanded' => true))
            ->add('Supprimer', SubmitType::class);
    }

    }
