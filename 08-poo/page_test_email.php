<?php

require_once 'classes/Email.php';
require_once 'classes/SpamChecker.php';

$email = new Email("he@vu.mq");
var_dump($email);
var_dump($email->getDomain());

$emails = [
    new Email("zen@lor.cf"),
    new Email("cahadfu@jumevuacu.cr"),
    new Email("len@jalufugi.mo"),
    new Email("fi@takib.se"),
    new Email("kot@heimi.cu"),
    new Email("ussad@sasudna.mn"),
];

// Instruction d'initialisation
$i = 0;

while ($i < count($emails)) { // Condition de maintien
    echo $emails[$i]->getDomain() . "<br />";
    // Instruction de pas
    $i++;
}

echo "---<br />";

foreach ($emails as $item) {
    echo $item->getDomain() . "<br />";
}

echo "---<br />";

$invalidEmail = new Email("Coucou");
var_dump($invalidEmail->getDomain());
