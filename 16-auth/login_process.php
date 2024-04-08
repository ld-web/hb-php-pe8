<?php

session_start();
require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/functions/redirect.php';

//On tente de se connecter à la base de données
try {
    $pdo = getConnection();
} catch(PDOException $e) {
    redirect('login.php');
}

//On vérifie si on a bien des données
if (empty($_POST)) {
    redirect('login.php');
}

//On récupère toutes les infos du formulaire dans un tableau $_POST
$email = $_POST['email'];
$formPassword = $_POST['password'];

//On vérifie si un des champs n'est pas vide
if (empty($email) || empty($formPassword) == true) {
    redirect('login.php');
}

// On vérifie si l'email est correct
// Ça peut nous permettre de vérifier si un compte existe pour cette adresse email
$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');

$stmt->bindValue('email', $email);
$stmt->execute();

// fetch nous retourne false s'il n'y a pas de résultat
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user === false) { // Pas de résultat
    redirect('login.php'); // avec éventuellement un code d'erreur utilisateur n'existe pas...
}

$passwordHash = $user['password'];
$passwordOk = password_verify($formPassword, $passwordHash);

if (!$passwordOk) {
    redirect('login.php'); // avec éventuellement un code d'erreur mot de passe incorrect...
}

$_SESSION['connected'] = true;

$_SESSION['user'] = [
    'id' => $user['id'],
    'name' => $user['name'],
    //...
];

redirect('index.php');
