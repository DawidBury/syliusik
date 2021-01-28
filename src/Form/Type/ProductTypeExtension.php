<?php

declare(strict_types=1);

namespace App\Form\Type;

use App\Entity\Product\Product;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('color', ChoiceType::class, [
                'required' => false,
                'label' => 'sylius.form.product.colors.color',
                'choices' => [
                    'sylius.form.product.colors.red' => Product::RED,
                    'sylius.form.product.colors.blue' => Product::BLUE,
                    'sylius.form.product.colors.green' => Product::GREEN,
                ]
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
