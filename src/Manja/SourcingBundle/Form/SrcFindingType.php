<?php

namespace Manja\SourcingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SrcFindingType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('version', 'text')
            ->add('baseMetal', 'text')
            ->add('finish', 'text')
            ->add('shape', 'text')
            ->add('size1', 'text')
            ->add('size2', 'text')
            ->add('size3', 'text')
            ->add('sizeSection', 'text')
            ->add('weightPiece', 'text')
            ->add('minQtyBuy', 'text')
            ->add('picturePath', 'text')
            ->add('findingName',      'entity', array('class' => 'ManjaSourcingBundle:FindingName',
                                                    'property' => 'name',
                                                    'multiple' => false))
            ->add('priceGram',      new PricesType())
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
            'data_class' => 'Manja\SourcingBundle\Entity\SrcFinding'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'manja_sourcingbundle_srcfinding';
    }
}
