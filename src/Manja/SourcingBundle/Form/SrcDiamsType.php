<?php

namespace Manja\SourcingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SrcDiamsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type',               'text')
            ->add('shape',              'text')
            ->add('cut',                'text')
            ->add('cutComment',         'text')
            ->add('color',              'text')
            ->add('clarity',            'text')
            ->add('comment',            'text')
            ->add('size1',              'text')
            ->add('size2',              'text')
            ->add('weightPiece',        'text')
            ->add('minQtyBuy',          'text')
            ->add('priceCt',            new PricesType())
            ->add('pricePiece',         new PricesType())
            ->add('furnisher',          'entity', array('class' => 'ManjaSourcingBundle:Supplier',
                                                    'property' => 'company',
                                                    'multiple' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Manja\SourcingBundle\Entity\SrcDiams'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'manja_sourcingbundle_srcdiams';
    }
}
