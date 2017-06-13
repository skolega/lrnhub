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

class AnswerAdmin extends AbstractAdmin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->with('Content', array('class' => 'col-md-6'))
                ->add('text', 'text')
                ->add('is_correct','choice', array(
                    'choices' => array(
                        'no' => false,
                        'yes' => true,
                    )
                ))
                ->end();
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper->add('text');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('text');
    }

}
