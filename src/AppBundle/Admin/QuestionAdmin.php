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

class QuestionAdmin extends AbstractAdmin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->with('Content', array('class' => 'col-md-6'))
                ->add('text', 'text')
                ->add('type', 'choice', array(
                    'choices' => array(
                        'choices' => 'choices',
                        'fill' => 'fill',
                        'pick one'=>'pick',
                        'write answer'=>'answer',
                    )
                ))
                ->add('answers', 'sonata_type_model', array(
                    'multiple' => true, 
                    'by_reference' => false,
                    'class' => 'AppBundle\Entity\Answer',
                ))
                ->end();
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper->add('id');
        $datagridMapper->add('text');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('text');
        $listMapper->addIdentifier('lesson_part');
    }

}
