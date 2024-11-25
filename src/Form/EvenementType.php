<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titreEven', TextType::class, [
            'label' => 'Titre de l\'événement', // Label personnalisé
            'attr' => [
                'class' => 'form-control', // Classe Bootstrap ou autre framework CSS
                'placeholder' => 'Saisir le titre de l\'événement', // Placeholder
            ],
        ])
        ->add('descriptionEven', TextareaType::class, [
            'label' => 'Description',
            'attr' => [
                'class' => 'form-control',
                'rows' => 5,
                'placeholder' => 'Décrire l\'événement ici...',
            ],
        ])
        ->add('dateEvenement', DateType::class, [
            'label' => 'Date de l\'événement',
            'widget' => 'single_text',
            'html5' => true,
            'attr' => [
                'class' => 'form-control',
            ],
        ])
        ->add('lieu', TextType::class, [
            'label' => 'Lieu',
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Lieu de l\'événement',
            ],
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
