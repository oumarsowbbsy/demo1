<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class EventAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper

            ->add('libele')
            ->add('date')
            ->add('lieu')
            ->add('description')
            ->add('photo')
            ->add('imageName')
            ->add('imageSize')
            //->add('updatedAt')
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper

            ->add('libele')
            ->add('date')
            ->add('lieu')
            ->add('description')
            ->add('photo')
            ->add('imageName')
            ->add('imageSize')
            //->add('updatedAt')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper

            ->add('libele')
            ->add('date')
            ->add('lieu')
            ->add('description')
            ->add('photo')
            ->add('imageName')
            ->add('imageSize')
            //->add('updatedAt')
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper

            ->add('libele')
            ->add('date')
            ->add('lieu')
            ->add('description')
            ->add('photo')
            ->add('imageName')
            ->add('imageSize')
            //->add('updatedAt')
            ;
    }
}
