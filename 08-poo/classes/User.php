<?php

class User
{
    private ?string $firstname;
    private ?string $lastname;
    private string $email;

    public function __construct(
        ?string $prenomInitial = null,
        ?string $nomInitial = null
    ) {
        $this->firstname = $prenomInitial;
        $this->lastname  = $nomInitial;
    }

    public function getFullname(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
}
