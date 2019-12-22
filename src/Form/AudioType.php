<?php

namespace App\Form;

use App\Entity\Audio;
use App\Entity\Categorya;
use App\Entity\Categoryp;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class AudioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('audioName')
            ->add('description',[
            'required'   => false,
              ])
            ->add('categoriea', EntityType::class, [
                'class' => Categorya::class,
                'choice_label' => 'name',
                'multiple' => false
            ])
            ->add('audioFile', vichFileType::class, [
                'required' => false,
                'allow_delete' => true,
                'asset_helper' => true,

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Audio::class,
        ]);
    }
}
