<?php

namespace Manja\SourcingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SrcPearlsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('variety', 'text')
            ->add('origin', 'text')
            ->add('drilling', 'text')
            ->add('shape', 'text')
            ->add('shapeGrade', 'text')
            ->add('color1', 'text')
            ->add('color2', 'text')
            ->add('lusterGrade', 'text')
            ->add('surfaceGrade', 'text')
            ->add('size1', 'text')
            ->add('size2', 'text')
            ->add('sizeTxt', 'text')
            ->add('weightPiece', 'text')
            ->add('minQtyBuy', 'text')
            ->add('picturePath', 'text')
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
            'data_class' => 'Manja\SourcingBundle\Entity\SrcPearls'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'manja_sourcingbundle_srcpearls';
    }
}
