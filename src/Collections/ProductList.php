<?php

namespace App\Collections;

use App\Interfaces\Collection;

/**
 * Class ProductList
 * @package App\Entity\AbstractEntity
 * @implements Collection<\App\Entity\Product>
 * @template T of \App\Entity\Product
 */
class ProductList implements Collection
{
    /** @var array<int, T> */
    private array $list;

    /**
     * @phpstan-return array<int, T>
     */
    public function getList(): array
    {
        return $this->list;
    }

    /**
     * @phpstan-param T $item
     */
    public function addItem($item): void
    {
        $this->list[] = $item;
    }

    /**
     * @phpstan-param array<int, T> $list
     */
    public function setList(array $list): void
    {
        $this->list = $list;
    }
}