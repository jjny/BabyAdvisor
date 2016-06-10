<?php
/**
 * Created by PhpStorm.
 * User: fr120940
 * Date: 04/05/2016
 * Time: 11:27
 */

namespace ConnexionBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type as Type;

class connexionType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array('label' => 'Pseudo','attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('password', PasswordType::class, array('label' => 'Mot de passe', 'attr' => array('class' => 'form-control', 'placeholder' => '')))
            ->add('Connexion', SubmitType::class);
    }

    }
