<?php

function verificationPassword(string $input): bool
{
    $lowercase = preg_match('/[a-z]+/', $input);
    $uppercase = preg_match('/[A-Z]+/', $input);
    $number    = preg_match('/[0-9]+/', $input);
    $length    = strlen($input);

    return (
        $lowercase === 1 &&
        $uppercase === 1 &&
        $number    === 1 &&
        $length    >=  8
    );
}
