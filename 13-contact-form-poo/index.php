<?php

require_once __DIR__ . '/functions/db.php';

try {
    $pdo = getConnection();
} catch (PDOException $e) {
    echo "Erreur lors de la connexion à la base de données";
    exit;
}

// Je lance une requête avec l'instance de PDO
$stmt = $pdo->query("SELECT * FROM users");
// À partir du Statement récupéré, je lis tous les résultats
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($users);
