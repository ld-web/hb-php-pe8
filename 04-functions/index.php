<?php

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/functions/text.php';

direBonjour();

$name = "Nabil";
$nameMajuscules = uppercase($name);
var_dump($nameMajuscules);

$user = ['firstname' => 'Mbarka'];

direBonjour($user['firstname']);

function findAll(string $table): array
{
    $query = "SELECT * FROM $table";
    // requête SQL
    return [];
}

$products = findAll('products');
$users = findAll('users');

$extract = "understanding nails";
var_dump($extract);

$paragraph = getAsParagraph($extract);
var_dump($paragraph);

var_dump($extract);

echo $paragraph;
