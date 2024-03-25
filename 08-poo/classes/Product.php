<?php

class Product
{
    // Propriétés - Structure de la classe
    public string $name;
    private float $priceVatFree;

    // Méthodes - Capacités de la classe
    public function getFullPrice(float $tvaRate): float
    {
        return $this->priceVatFree * (1 + $tvaRate);
    }

    public function setPriceVatFree(float $price): void
    {
        if ($price > 0) {
            $this->priceVatFree = $price;
        }
    }
}
