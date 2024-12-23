<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EnterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nameType1', TextType::class, [
                'label' => 'Entrez le Type du pokemon à analyser ici : ',
            ])
            ->add('nameType2', TextType::class, [
                'label' => 'Entrez le 2e Type du pokemon à analyser ici si il est double type : ',
                'required' => false,
            ]);
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null, // Formulaire indépendant
        ]);
    }
}
