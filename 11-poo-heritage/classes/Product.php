<?php

class Product
{
    public function __construct(
        protected string $name,
        protected float $price,
    ) {
    }
}
