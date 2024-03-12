<?php

$notes = [1, 16, 7, 18, 6, 12, 14, 20];

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

// Afficher les notes et les users avec 4 types de boucles différents
// --- Notes ---
// for
echo "<h2>FOR</h2>";
// for (Instruction d'initialisation; condition de maintien; instruction de pas)
for ($i = 0; $i < count($notes); $i++) {
    echo $notes[$i] . "<br />";
}

// while
echo "<h2>WHILE</h2>";
$i = 0; // Instruction d'initialisation
while ($i < count($notes)) { // condition de maintien
    echo $notes[$i] . " ";
    $i++; // Instruction de pas
}

// do...while
echo "<h2>DO...WHILE</h2>";
$i = 0; // Instruction d'initialisation
do {
    echo $notes[$i] . " ";
    $i++; // Instruction de pas
} while ($i < count($notes)); // Condition de maintien

// foreach
echo "<h2>FOREACH</h2>";
foreach ($notes as $note) {
    echo $note . " ";
}

echo "<h2>FOREACH KEY => INDEX</h2>";
foreach ($notes as $key => $note) {
    echo $key . " : " . $note . "<br />";
}

// --- Users ---
// for
echo "<h2>FOR</h2>";
for ($i = 0; $i < count($users); $i++) {
    echo $users[$i]['firstname'] .
        ' ' .
        $users[$i]['name'] . '<br />';
}

// while
echo '<h2>WHILE</h2>';
$i = 0;
while ($i < count($users)) {
    echo $users[$i]['firstname'] .
        ' ' .
        $users[$i]['name'] . '<br />';
    $i++;
}

// do...while
echo '<h2>DO...WHILE</h2>';
$i = 0;
do {
    echo $users[$i]['firstname'] .
        ' ' .
        $users[$i]['name'] . '<br />';
    $i++;
} while ($i < count($users));

// foreach
echo '<h2>FOREACH</h2>';
foreach ($users as $user) {
    echo $user['firstname'] . ' ' . $user['name'];
    echo '<br />';
}
