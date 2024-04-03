<?php

require_once __DIR__ . '/User.php';

class Employee extends User
{
    private string $empNumber;

    // --- Constructeur ---
    public function __construct(string $name, string $email)
    {
        parent::__construct($name, $email);
        // Code employé : "EMP-dc312f"
        $this->empNumber = "EMP-" . bin2hex(random_bytes(3));
    }

    // --- Méthodes ---
    public function getDescription(): string
    {
        return $this->name . " - " . $this->email . " - " . $this->empNumber;
    }

    // --- Getters / Setters ---
    public function getEmpNumber(): string
    {
        return $this->empNumber;
    }
    public function setEmpNumber(string $empNumber): self
    {
        $this->empNumber = $empNumber;
        return $this;
    }
}
