<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', null, [
                'label' => 'Adresse mail',
                'attr' => array(
                    'label' => 'Adresse mail',
                    'placeholder' => 'Ex: mail@snowtricks.com'
                )
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'attr' => array(
                    'placeholder' => '*******',
                )
            ])
            ->add('pseudo', null, [
                'label' => 'Pseudo',
                'attr' => array(
                    'placeholder' => 'Ex: JamesDupont9',
                )
            ])
            ->add('cover', FileType::class, [
                'label' => 'Photo de profile'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}