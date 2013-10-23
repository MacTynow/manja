<?php

namespace Manja\SourcingBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SupplierChooseContactType extends SupplierType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->remove('productCategory');
        $builder->remove('comment');
        $builder->remove('suppliesDiamond');
        $builder->remove('suppliesStones');
        $builder->remove('suppliesPearls');
        $builder->remove('suppliesChains');
        $builder->remove('suppliesFindings');
        $builder->remove('suppliesAccLength');
        $builder->remove('suppliesAccPiece');
        $builder->remove('suppliesMetal');
        $builder->remove('suppliesTask');
        $builder->remove('rank');
    }

    public function getName()
    {
        return 'manja_sourcingbundle_supplierchoosecontacttype';
    }
}
