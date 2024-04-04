<?php

class RequiredFieldsException extends InvalidArgumentException
{
    public function __construct()
    {
        $this->message = "Merci de fournir les champs requis";
        $this->code = 4567;
    }
}
