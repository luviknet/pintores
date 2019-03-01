<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TrabajoeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class)
            ->add('tipo', ChoiceType::class, [
                  'choices'  => [
                      'Exterior' => 'exterior',
                      'Interior' => 'interior',
                      'Exterior e Interior' => 'exteriorinterior',
                  ],
              ])
            
            ->add('ambientes', TextType::class)
            ->add('superficie', TextType::class)
            ->add('nota', TextType::class)
           ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Trabajoe',
        ]);
    }
}