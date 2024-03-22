<?php

$tab = [1, 2, 3];

[2 => $test] = $tab;
var_dump($test);

$user = [
    'id' => 1,
    'name' => 'Irene',
    'age' => 65
];

[
    'id' => $id,
    'name' => $name,
    'age' => $age
] = $user;

var_dump($id, $name, $age);
