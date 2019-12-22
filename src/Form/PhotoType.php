<?php

namespace App\Form;

use App\Entity\Categoryp;
use App\Entity\Photo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class PhotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('categories', EntityType::class, [
                'class' => Categoryp::class,
                'choice_label' => 'name',
                'multiple' => false
            ])
            ->add('imageFile', vichFileType::class, [
                'required' => false,
                'allow_delete' => true,
                'asset_helper' => true,

            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Photo::class,
        ]);
    }
}
