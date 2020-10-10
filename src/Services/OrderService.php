<?php

namespace App\Services;

use App\Collections\ProductList;
use App\Entity\Order;
use App\Entity\Product;

class OrderService
{
    public function generateNewOrderAndPassWithPHPStan(): Order
    {
        $products = [
            new Product(1, 'Cheese'),
            new Product(1, 'Bread'),
            new Product(1, 'Lettuce'),
        ];
        $productList = new ProductList();
        $productList->setList($products);
        return new Order(1, $productList);
    }

    public function generateNewOrderAndFailWithPHPStan(): Order
    {
        $products = [
            'fail',
            new Product(1, 'Cheese'),
            new Product(1, 'Bread'),
            new Product(1, 'Lettuce'),
            'hello',
            '1234',
            1.234,
        ];
        $productList = new ProductList();
        $productList->setList($products);
        return new Order(1, $productList);
    }
}