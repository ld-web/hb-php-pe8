<?php

const EMAIL_SPAM = 1;
const EMAIL_DUPLICATE = 2;
const EMAIL_INVALID = 3;

function getErrorMessage(int $code): string
{
    $msg = '';

    switch ($code) {
        case EMAIL_SPAM:
            $msg = "L'email est un spam";
            break;
        case EMAIL_DUPLICATE:
            $msg = "L'email existe déjà";
            break;
        case EMAIL_INVALID:
            $msg = "Ce champ n'est pas un email";
            break;
        default:
            $msg = "Une erreur est survenue";
    }

    return $msg;
}
