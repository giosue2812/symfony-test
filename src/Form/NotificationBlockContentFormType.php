<?php

namespace App\Form;

use App\Entity\NotificationBlockContent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NotificationBlockContentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //Mon champ lang est en Hidden Type car il ne doit pas être entré. Il est défini par le choix de la langue
            ->add('lang',HiddenType::class,['required'=>true])
            //Pour le text de la notification j'utilise un champ de type TextArea
            ->add('text',TextareaType::class, ['required'=>true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>NotificationBlockContent::class
        ]);
    }
}
