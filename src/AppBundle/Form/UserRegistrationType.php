<?php

/**
 * Created by PhpStorm.
 * User: kaanburaksener
 * Date: 14/10/16
 * Time: 16:58
 */

namespace AppBundle\Form;

use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserRegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => false,
                'required' => true,
                'attr'  => [
                    'placeholder' => 'Username'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'required' => true,
                'attr'  => [
                    'placeholder' => 'Email'
                ]
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options'  => [
                    'label' => false,
                    'attr'  => [
                        'placeholder' => 'Password'
                    ]
                ],
                'second_options' => [
                    'label' => false,
                    'attr'  => [
                        'placeholder' => 'Repeat Password'
                    ]
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Register!'
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}