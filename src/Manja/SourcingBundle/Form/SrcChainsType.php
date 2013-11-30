<?php

namespace Manja\SourcingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SrcChainsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', 'text')
            ->add('name', 'text')
            ->add('version', 'text')
            ->add('baseMetal', 'text')
            ->add('finish', 'text')
            ->add('shape', 'text')
            ->add('size1', 'text')
            ->add('size2', 'text')
            ->add('sizeSection', 'text')
            ->add('weightMeter', 'text')
            ->add('qtyLengthFinished', 'text')
            ->add('minQtyBuy', 'text')
            ->add('picturePath', 'text')
            ->add('priceGram',      new PricesType())
            ->add('priceMeter',      new PricesType())
            ->add('pricePiece',      new PricesType())
            ->add('furnisher',      'entity', array('class' => 'ManjaSourcingBundle:Supplier',
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
            'data_class' => 'Manja\SourcingBundle\Entity\SrcChains'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'manja_sourcingbundle_srcchains';
    }
}
