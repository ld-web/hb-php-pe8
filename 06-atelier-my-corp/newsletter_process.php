<?php

require_once 'functions/common.php';
require_once 'functions/email.php';
require_once 'functions/error.php';
require_once 'functions/newsletter.php';

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

if (isDuplicate($email)) {
    redirect("index.php?error=" . EMAIL_DUPLICATE);
}

addEmailToNewsletter($email);
redirect('index.php?success=1');
