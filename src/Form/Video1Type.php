<?php

namespace App\Form;

use App\Entity\Categoryv;
use App\Entity\Video;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;

use Vich\UploaderBundle\Form\Type\VichFileType;

class Video1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $imageConstraints = [
            new Image([
                'maxSize' => '50M'
            ])
        ];
        $builder
            ->add('name')
            ->add('description')
            ->add('videoName')
           // ->add('updatedAt')
            ->add('categoryv', EntityType::class, [
                'class' => Categoryv::class,
                'choice_label' => 'name',
                'multiple' => false,

           ])
            //->add('categories')
            ->add('videoFile', vichFileType::class, [
                'required' => false,
                'allow_delete' => true,
                'asset_helper' => true,
                'constraints' => [
                    new File([
                        'maxSize' => '50M',
                    ])
                    ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}
