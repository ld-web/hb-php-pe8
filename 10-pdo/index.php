<?php

// host.docker.internal          3306/3307
$dsn = "mysql:host=172.17.0.1;port=3640;dbname=hb_pe8_pdo;charset=utf8mb4";

try {
    $pdo = new PDO(
        $dsn,
        "hb_pe8_pdo",
        ")Su5daf_i[bKyN3P"
    );
} catch (PDOException $e) {
    echo "Erreur lors de la connexion à la base de données";
    exit;
}

// Je lance une requête avec l'instance de PDO
$stmt = $pdo->query("SELECT * FROM users");
// À partir du Statement récupéré, je lis tous les résultats
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($users);
