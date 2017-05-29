<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class LessonPartAdmin extends AbstractAdmin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->with('Content', array('class' => 'col-md-6'))
                ->add('name', 'text')
                ->add('description', 'textarea')
                ->add('points', 'integer')
                ->add('lesson_order', 'integer')
                ->end()
                ->with('More', array('class' => 'col-md-6'))
                 ->add('attachment', 'sonata_type_model', array(
                    'class' => 'AppBundle\Entity\Attachment',
                    'property' => 'name',
                ))
                ->add('questions', 'sonata_type_model', array(
                    'multiple' => true, 
                    'by_reference' => false,
                    'class' => 'AppBundle\Entity\Question',
                    'property' => 'name',
                ))
                ->end();
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper->add('name');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('name');
        $listMapper->addIdentifier('lesson');
        $listMapper->addIdentifier('lesson_order');
    }

}
