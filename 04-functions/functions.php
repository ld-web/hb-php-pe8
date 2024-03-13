<?php

function uppercase(string $text): string
{
    $result = strtoupper($text);
    $text = '';
    var_dump($text);

    return $result;
}

function direBonjour(string $nom = "bel inconnu"): void
{
    echo "BONJOUR $nom !!!";
}
