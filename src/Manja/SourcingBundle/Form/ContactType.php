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
            ->add('title',              'text')
            ->add('firstname',          'text')
            ->add('middleName',         'text')
            ->add('lastName',           'text')
            ->add('company',            'text')
            ->add('department',         'text')
            ->add('jobTitle',           'text')
            ->add('homestreet',         'text')
            ->add('homeCity',           'text')
            ->add('homeState',          'text')
            ->add('homePostalcode',     'text')
            ->add('homeCountry',        'text')
            ->add('homeFax',            'text')
            ->add('homePhone',          'text')
            ->add('homePhone2',         'text')
            ->add('mobilePhone',        'text')
            ->add('birthday',           'text')
            ->add('poBox',              'text')
            ->add('children',           'text')
            ->add('emailAddress',       'text')
            ->add('emailDisplayName',   'text')
            ->add('emailAddress2',      'text')
            ->add('email2DisplayName',  'text')
            ->add('emailAddress3',      'text')
            ->add('email3DisplayName',  'text')
            ->add('gender',             'text')
            ->add('governmentIdNumber', 'text')
            ->add('hobby',              'text')
            ->add('keywords',           'text')
            ->add('comment',            'text')
            ->add('spouse',             'text')
            ->add('website',            'text')
            ->add('picturePath',        'text')
            ->add('officeAddress',      'text')
            ->add('officeStreet',       'text')
            ->add('officeCity',         'text')
            ->add('officeZip',          'text')
            ->add('officeState',        'text')
            ->add('officeCountry',      'text')
            ->add('officePhone',        'text')
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
