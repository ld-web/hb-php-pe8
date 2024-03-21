<?php

require_once 'functions/common.php';

// Si je n'ai pas d'email dans les données POST
// ou encore, si on n'est pas passé par le formulaire
if (!isset($_POST['email'])) {
    // Redirige l'utilisateur vers index.php
    redirect('index.php');
}

$email = $_POST['email'];
$emailsFilePath = __DIR__ . '/data/emails.txt';
// Vérifier qu'il n'existe pas déjà dans un fichier donné
$emailsFile = fopen($emailsFilePath, 'a+'); // a = append
if (filesize($emailsFilePath) > 0) {
    $emails = file($emailsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $isDuplicate = in_array($email, $emails);
} else {
    $isDuplicate = false;
}
// S'il existe déjà, j'affiche un message d'erreur
if ($isDuplicate) {
    fclose($emailsFile);
    redirect('index.php?duplicate=1');
} else {
    // Sinon, j'enregistre l'email dans le fichier donné
    fwrite($emailsFile, $email . PHP_EOL);
    fclose($emailsFile);
    redirect('index.php?success=1');
}
