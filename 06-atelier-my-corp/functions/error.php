<?php

const EMAIL_SPAM = 1;
const EMAIL_DUPLICATE = 2;

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
        default:
            $msg = "Une erreur est survenue";
    }

    return $msg;
}
