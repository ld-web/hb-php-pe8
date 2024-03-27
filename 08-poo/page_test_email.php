<?php

require_once 'classes/Email.php';
require_once 'classes/SpamChecker.php';

var_dump(Email::$nbEmailInstances);

$email = new Email("he@vu.mq");

var_dump(Email::$nbEmailInstances);

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

var_dump(Email::$nbEmailInstances);

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

try {
    $invalidEmail = new Email("Coucou");
    var_dump($invalidEmail->getDomain());
} catch (InvalidArgumentException $e) {
    echo $e->getMessage() . "<br />";
}

echo "---<br />";

var_dump(SpamChecker::SPAM_DOMAINS);

$spamChecker = new SpamChecker();
var_dump($spamChecker->isSpam($email));
