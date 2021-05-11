<?php

namespace App\Form;

use App\Entity\Notification;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NotificationFormType extends AbstractType
{
    //I use the buildForm to build the form
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //Titre requis et de type text
            ->add('title',TextType::class,["required"=>true])
            //Date qui est requis et qui sera sous forme datepicker
            ->add('activationDate',DateType::class,[
                    'required'=>true,
                    'widget'=>'single_text',
                    'format' => 'yyyy-MM-dd',
                    'attr'=>['class'=>'js-datepicker']
                ])
            //Le notificationBlock fait appelle a un autre form type
            ->add('notificationBlock',NotificationBlockFormType::class,["required"=>true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>Notification::class
        ]);
    }
}
