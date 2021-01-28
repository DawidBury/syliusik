<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct
{
    public const RED = 'red';
    public const BLUE = 'blue';
    public const GREEN = 'green';

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }

    /**
     * @ORM\Column(name="color", type="string", nullable=true)
     */
    protected $color;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }
}
