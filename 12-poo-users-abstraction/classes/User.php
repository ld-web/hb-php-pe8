<?php

abstract class User
{
    protected string $name;
    protected string $email;
    protected string $password;

    public function __construct(
        string $name,
        string $email
    ) {
        $this->name = $name;
        $this->email = $email;
        // Génération d'une chaîne aléatoire pour le mot de passe
        $this->password = bin2hex(random_bytes(10));
    }

    abstract public function getDescription(): string;

    public function getName()
    {
        return $this->name;
    }
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password): self
    {
        $this->password = $password;
        return $this;
    }
}
