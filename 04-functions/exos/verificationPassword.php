<?php

function verificationPassword(string $input): bool
{
    return strlen($input) >= 8;
}

$passwordIsValid = verificationPassword("Oula");

var_dump($passwordIsValid);
var_dump(verificationPassword("Hello world !"));
