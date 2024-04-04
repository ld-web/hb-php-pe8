<?php

require_once __DIR__ . '/functions/utils.php';
require_once __DIR__ . '/functions/contact_form.php';
require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/classes/ContactForm.php';
require_once __DIR__ . '/classes/RequiredFieldsException.php';

// 1 - J'initialise la propriété $data dans ContactForm
// Donc $data dans $contactForm prendra la valeur de $_POST
try {
    $contactForm = new ContactForm($_POST);
} catch (RequiredFieldsException $e) {
    // Chose spécifique que je veux faire si les champs requis
    // ne sont pas fournis
    redirect("contact.php");
} catch (InvalidEmailException) {
    // Autre chose spécifique que je veux faire si
    // l'email est invalide
    redirect("contact.php");
}

// 3 - Si je suis à cet endroit, ça veut dire que
// mes données bien sont bien présentes, et valides.
// À partir de là, je peux commencer à me connecter à la BDD
try {
    $pdo = getConnection();
} catch (PDOException $e) {
    redirect('contact.php');
}

// 4 - Si je me trouve ici, alors ça veut dire
// que je ne suis pas passé dans le catch.
// Je vais donc enregistrer la demande de contact
// en base de données
$stmt = $pdo->prepare("INSERT INTO contact_requests (name, firstname, email, object, message) VALUES (:formName, :formFirstname, :formEmail, :formObject, :formMessage)");

// Lier les valeur à leurs paramètres
$stmt->bindValue('formName', $_POST['name']);
$stmt->bindValue('formFirstname', $_POST['firstname']);
$stmt->bindValue('formEmail', $_POST['email']);
$stmt->bindValue('formObject', $_POST['object'], PDO::PARAM_INT);
$stmt->bindValue('formMessage', $_POST['message']);

// Exécuter
$success = $stmt->execute();

if (!$success) {
    redirect('contact.php');
}

redirect('thank_you.php');
