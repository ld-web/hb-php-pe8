<?php

require_once __DIR__ . '/User.php';

class Manager extends User
{
    public function getDescription(): string
    {
        return "MANAGER : " . $this->name . " - " . $this->email;
    }
}
