<?php

class Email
{
    private string $email;
    public static int $nbEmailInstances = 0;

    public function __construct(string $email)
    {
        if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo "$email n'est pas un email valide<br />";
        }
        $this->email = $email;
        self::$nbEmailInstances++;
    }

    public function getDomain(): string
    {
        // Explode crée un tableau de deux éléments ici
        // Pour une adresse "email@test.com",
        // on aura le tableau ['email', 'test.com']
        $emailParts = explode('@', $this->email);
        // Le domaine se trouve donc en seconde position
        // Son index est donc 1
        return $emailParts[1];
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
