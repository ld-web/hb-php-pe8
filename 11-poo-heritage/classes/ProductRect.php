<?php

require_once __DIR__ . '/Product.php';

class ProductRect extends Product
{
    public function __construct(
        private int $width,
        private int $height,
        string $name = "Produit rectangulaire",
        float $price = 15,
    ) {
        parent::__construct($name, $price);
    }

    public function getDescription(): string
    {
        return $this->name . " - " . $this->price . " - " . $this->width . 'x' . $this->height;
    }
}
