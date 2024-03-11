<?php

const SOFTWARE_VERSION = "1.5.3";
const AGE_MAJORITE = 18;

const ARTICLE_DRAFT = 1;
const ARTICLE_REVIEW = 2;
const ARTICLE_PUBLISHED = 3;
// ...

$age = 26;

echo "Bonjour, vous avez $age ans<br />";

// Première version : if-else
// ---
// if ($age >= AGE_MAJORITE) {
//     echo "Vous êtes majeur.";
// } else {
//     echo "Vous êtes mineur.";
// }
// ---
// $majeur contient true ou false
$majeur = $age >= AGE_MAJORITE;
// Opérateur ternaire
echo 'Vous êtes ' . ($majeur ? "majeur" : "mineur");
