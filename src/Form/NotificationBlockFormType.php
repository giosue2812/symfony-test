<?php

namespace App\Form;

use App\Entity\NotificationBlock;
use App\Entity\NotificationBlockContent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NotificationBlockFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //isValid est définit en tant que ChoiceType. Qui ne sera pas multiple et qui aura un expanded a true pour avoir un 'radio'
        $builder
            ->add('isValid',ChoiceType::class,[
                'choices'=>[
                    'Oui'=>true,
                    'Non'=>false
                ],
                'multiple'=>false,
                'expanded'=>true
            ])
            //Ici normalement le champ devait être une CollectionType.
            // Comme c'est quelque chose que je n'ai jamais fait en symfony je n'ai pas pu répondre à la problématique dans le temp impartie.
            //Une des pistes pour le faire consiste à mettre en place une CollectionType en modifiant bien sur l'objet également.
            //J'ai deja utilisé cette technique en Angular avec le FormArray.
            ->add('notificationBlockContent',NotificationBlockContentFormType::class,["required"=>true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>NotificationBlock::class
        ]);
    }
}
