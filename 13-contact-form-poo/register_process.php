<?php

require_once __DIR__ . '/functions/db.php';

[
    'name' => $name,
    'email' => $email,
    'password' => $password
] = $_POST;

$pdo = getConnection();

$query = "INSERT INTO users (name, email, `password`) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($query);

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$stmt->execute([$name, $email, $hashedPassword]);

header('Location: index.php');
exit;
