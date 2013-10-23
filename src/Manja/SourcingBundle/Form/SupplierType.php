<?php

namespace Manja\SourcingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SupplierType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productCategory',    'text')
            ->add('comment',            'text', array('required' => false))
            ->add('suppliesDiamond',    'checkbox', array('required' => false))
            ->add('suppliesStones',     'checkbox', array('required' => false))
            ->add('suppliesPearls',     'checkbox', array('required' => false))
            ->add('suppliesChains',     'checkbox', array('required' => false)) 
            ->add('suppliesFindings',   'checkbox', array('required' => false))
            ->add('suppliesAccLength',  'checkbox', array('required' => false))
            ->add('suppliesAccPiece',   'checkbox', array('required' => false))
            ->add('suppliesMetal',      'checkbox', array('required' => false))
            ->add('suppliesTask',       'checkbox', array('required' => false))
            ->add('contact',            'entity',  array('class' => 'ManjaSourcingBundle:Contact',
                                                         'property' => 'lastname', 
                                                         'multiple' => false))  
            ->add('rank',               'entity',  array('class' => 'ManjaSourcingBundle:ContactRank',
                                                         'property' => 'rank', 
                                                         'multiple' => false))  

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Manja\SourcingBundle\Entity\Supplier'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'manja_sourcingbundle_supplier';
    }
}
