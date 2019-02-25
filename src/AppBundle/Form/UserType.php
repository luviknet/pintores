<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('email', EmailType::class)
            ->add('zone', ChoiceType::class, [
                  'choices'  => [
                      'Gba Oeste' => 'gbaoeste',
                      'Gba Sur' => 'gbasur',
                      'Gba Norte' => 'gbanorte',
                      'Caba' => 'caba',
                  ],
              ])
            ->add('tipo', ChoiceType::class, [
                  'choices'  => [
                      'Exterior' => 'exterior',
                      'Interior' => 'interior',
                      'Exterior e Interior' => 'exteriorinterior',
                  ],
              ])
            ->add('profile', ChoiceType::class, [
                'choices'  => [
                    'Hogar' => 'hogar',
                    'Profesional' => 'profesional',
                     
                ],
            ])  
            ->add('email', EmailType::class)
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => ['label' => 'Password'],
                'second_options' => ['label' => 'Confirm Password'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\User',
        ]);
    }
}