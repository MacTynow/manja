<?php

namespace Manja\SourcingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',              'text', array('required' => false))
            ->add('firstname',          'text', array('required' => false))
            ->add('middleName',         'text', array('required' => false))
            ->add('lastName',           'text', array('required' => false))
            ->add('company',            'text', array('required' => false))
            ->add('department',         'text', array('required' => false))
            ->add('jobTitle',           'text', array('required' => false))
            ->add('homestreet',         'text', array('required' => false))
            ->add('homeCity',           'text', array('required' => false))
            ->add('homeState',          'text', array('required' => false))
            ->add('homePostalcode',     'text', array('required' => false))
            ->add('homeCountry',        'text', array('required' => false))
            ->add('homeFax',            'text', array('required' => false))
            ->add('homePhone',          'text', array('required' => false))
            ->add('homePhone2',         'text', array('required' => false))
            ->add('mobilePhone',        'text', array('required' => false))
            ->add('birthday',           'text', array('required' => false))
            ->add('poBox',              'text', array('required' => false))
            ->add('children',           'text', array('required' => false))
            ->add('emailAddress',       'text', array('required' => false))
            ->add('emailDisplayName',   'text', array('required' => false))
            ->add('emailAddress2',      'text', array('required' => false))
            ->add('email2DisplayName',  'text', array('required' => false))
            ->add('emailAddress3',      'text', array('required' => false))
            ->add('email3DisplayName',  'text', array('required' => false))
            ->add('gender',             'text', array('required' => false))
            ->add('governmentIdNumber', 'text', array('required' => false))
            ->add('hobby',              'text', array('required' => false))
            ->add('keywords',           'text', array('required' => false))
            ->add('comment',            'text', array('required' => false))
            ->add('spouse',             'text', array('required' => false))
            ->add('website',            'text', array('required' => false))
            ->add('picturePath',        'text', array('required' => false))
            ->add('officeAddress',      'text', array('required' => false))
            ->add('officeStreet',       'text', array('required' => false))
            ->add('officeCity',         'text', array('required' => false))
            ->add('officeZip',          'text', array('required' => false))
            ->add('officeState',        'text', array('required' => false))
            ->add('officeCountry',      'text', array('required' => false))
            ->add('officePhone',        'text', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Manja\SourcingBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'manja_sourcingbundle_contact';
    }
}
