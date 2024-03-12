<?php

// Déclaration de tableau vide
$tab = [];
var_dump($tab);

//        0   1  2   3  4   5   6...
$notes = [1, 16, 7, 18, 6, 12, 14, 20];
var_dump($notes);

// Afficher la dernière note du tableau
// Quelle que soit la taille du tableau
$nbNotes = count($notes);
echo $notes[$nbNotes - 1];

// Ajout d'un élément à $notes
$notes[] = 17;
var_dump($notes);

$notes[0] = 9;
var_dump($notes);

// Tableau associatif
$customIndexes = [3 => 15, 12, 6 => 10, 65, 54, "bonbon"];
var_dump($customIndexes);
// echo $customIndexes[0]; // Erreur, index non défini
$customIndexes[5] = "Nabil";
var_dump($customIndexes);

// Autre tableau associatif
$user = [
    'name' => 'Monica',
    'city' => 'Lyon'
];

echo $user['city'] . '<br />';

// Tableau multidimensionnel
$users = [
    [
        'name' => 'Lennon',
        'firstname' => 'John'
    ],
    [
        'name' => 'Dylan',
        'firstname' => 'Bob'
    ]
];

echo $users[0]['firstname'];
