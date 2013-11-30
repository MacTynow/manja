<?php

namespace Manja\SourcingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SrcAccPieceType extends AbstractType
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
            ->add('baseMaterial', 'text')
            ->add('finish', 'text')
            ->add('shape', 'text')
            ->add('size1', 'text')
            ->add('size2', 'text')
            ->add('size3', 'text')
            ->add('sizeSection', 'text')
            ->add('sizeText', 'text')
            ->add('weightPiece', 'text')
            ->add('pieceLot', 'text')
            ->add('minQtyBuy', 'text')
            ->add('pricePiece',      new PricesType())
            ->add('priceLot',      new PricesType())
            ->add('priceGram', new PricesType())
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
            'data_class' => 'Manja\SourcingBundle\Entity\SrcAccPiece'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'manja_sourcingbundle_srcaccpiece';
    }
}
