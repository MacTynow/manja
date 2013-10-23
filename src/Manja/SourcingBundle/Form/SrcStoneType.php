<?php

namespace Manja\SourcingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SrcStoneType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type',           'text')
            ->add('comment',        'text')
            ->add('shape',          'text')
            ->add('cut',            'text')
            ->add('cutTxt',         'text')
            ->add('color1',         'text')
            ->add('color2',         'text')
            ->add('saturation',     'text')
            ->add('clarity',        'text')
            ->add('transparency',   'text')
            ->add('size1',          'text')
            ->add('size2',          'text')
            ->add('sizeHeight',     'text')
            ->add('weightPiece',    'text')
            ->add('minQtyBuy',      'text')
            ->add('variety',        'text')
            ->add('priceCt',        'text')
            ->add('pricePiece',     'text')
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
            'data_class' => 'Manja\SourcingBundle\Entity\SrcStone'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'manja_sourcingbundle_srcstone';
    }
}
