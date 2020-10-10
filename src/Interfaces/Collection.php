<?php

namespace App\Interfaces;

/**
 * Interface Collection
 * @package App\Interfaces
 * @template T
 */
interface Collection
{
    /**
     * @return array
     * @phpstan-return array<T>
     */
    public function getList(): array;

    /**
     * @param T $item
     */
    public function addItem($item): void;

    /**
     * @param array<T> $list
     */
    public function setList(array $list): void;
}