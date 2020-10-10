<?php

namespace App\Entity;

use App\Collections\ProductList;

/**
 * Class Order
 * @package App\Entity
 */
class Order
{
    private int $id;

    /** @var ProductList<Product>  */
    private ProductList $products;

    /**
     * Order constructor.
     * @param int $id
     * @param ProductList<Product> $products
     */
    public function __construct(int $id, ProductList $products)
    {
        $this->id = $id;
        $this->products = $products;
    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return ProductList<Product>
     */
    public function getProducts(): ProductList
    {
        return $this->products;
    }
}