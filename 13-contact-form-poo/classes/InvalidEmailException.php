<?php

class InvalidEmailException extends InvalidArgumentException
{
    public function __construct()
    {
        $this->message = "L'email fourni n'est pas valide";
    }
}
