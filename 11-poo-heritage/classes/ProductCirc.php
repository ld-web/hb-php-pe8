<?php

require_once __DIR__ . '/Product.php';

class ProductCirc extends Product
{
    public function __construct(
        string $name,
        float $price,
        private int $diameter
    ) {
    }
}
