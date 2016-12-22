<?php

namespace AppBundle\Form;

use AppBundle\Form\ProductShopInfoType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add(
                'brand',
                EntityType::class,
                ['class' => 'AppBundle:Brand', 'choice_label' => 'title',])
            ->add(
                'category',
                EntityType::class,
                ['class' => 'AppBundle:Category', 'choice_label' => 'name',])
            ->add('productShopInfos', CollectionType::class,
                [
                    'entry_type' => ProductShopInfoType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            ['mode' => 'create']
        );
    }

    public function getName()
    {
        return 'product_type';
    }
}