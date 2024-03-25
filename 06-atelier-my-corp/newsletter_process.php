<?php

require_once 'functions/common.php';
require_once 'functions/email.php';
require_once 'functions/error.php';

// Si je n'ai pas d'email dans les données POST
// ou encore, si on n'est pas passé par le formulaire
if (!isset($_POST['email'])) {
    // Redirige l'utilisateur vers index.php
    redirect('index.php');
}

$email = $_POST['email'];
// ['email' => $email] = $_POST;

if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    redirect('index.php?error=' . EMAIL_INVALID);
}

if (isSpam($email)) {
    redirect("index.php?error=" . EMAIL_SPAM);
}
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
    redirect('index.php?error=' . EMAIL_DUPLICATE);
} else {
    // Sinon, j'enregistre l'email dans le fichier donné
    fwrite($emailsFile, $email . PHP_EOL);
    fclose($emailsFile);
    redirect('index.php?success=1');
}
