<?php

class Product
{
    // Propriétés - Structure de la classe
    private string $name;
    private float $priceVatFree;

    // Méthodes - Capacités de la classe
    public function getFullPrice(float $tvaRate): float
    {
        return $this->priceVatFree * (1 + $tvaRate);
    }

    public function setPriceVatFree(float $price): self
    {
        if ($price > 0) {
            $this->priceVatFree = $price;
        }

        return $this;
    }

    // Getter de $name - Lecture
    public function getName(): string
    {
        return $this->name;
    }

    // Setter de $name - Écriture
    public function setName(string $newName): self
    {
        if (!empty($newName)) {
            $this->name = $newName;
        }

        return $this;
    }
}
