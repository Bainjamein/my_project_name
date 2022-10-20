<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PostType extends AbstractType
{
    public function buildForm($builder, array $options)
    {
		// configuration manuelle des champs
        $builder
            ->add('title', TextType::class, [
                'required' => true
            ])
            ->add('content', TextareaType::class, [
                'required' => true, 
                'label' => "Contenu de l'article", 
            ])
            ->add('date', DateType::class, [
                'required' => true, 
                "widget" => "single_text",
            ])
            ->add('submit', SubmitType::class)
        ;
    }

}