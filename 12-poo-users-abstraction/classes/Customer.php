<?php

require_once __DIR__ . '/User.php';

class Customer extends User
{
    private string $customerNumber;
    private bool $premium;

    public function __construct(string $name, string $email, bool $premium = false)
    {
        // Appel du constructeur parent : la méthode __construct dans User
        // On lui envoie le nom et l'email pour qu'elle se charge
        // de l'initialisation des propriétés communes : name, email & password
        parent::__construct($name, $email);
        $this->customerNumber = "CLI-" . bin2hex(random_bytes(7));
        $this->premium = $premium;
    }

    // --- Méthodes ---
    public function getDescription(): string
    {
        return $this->name . " - " . $this->email . " - " . $this->customerNumber;
    }

    public function getCustomerNumber(): string
    {
        return $this->customerNumber;
    }
    public function setCustomerNumber(string $customerNumber): self
    {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    public function isPremium(): bool
    {
        return $this->premium;
    }
    public function setPremium(bool $premium): self
    {
        $this->premium = $premium;
        return $this;
    }
}
