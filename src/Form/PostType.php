<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('title', TextType::class, [
        'label' => 'Titre :',
        "required" => false,
        'attr' => [
          "class" => 'form-control'
        ],
        ])
      ->add('content', TextareaType::class, [
        'label' => 'Contenu :',
        "required" => true,
        'attr' => [
          "class" => 'form-control'
        ],
        ])
      ->add('image', UrlType::class, ['label' => 'Url de l\'image :',
      "required" => false,
      'attr' => [
        "class" => 'form-control'
      ],
    ]);
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults([
      'data_class' => Post::class
    ]);
  }
}