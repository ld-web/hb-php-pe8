<?php

// Chargement de la configuration
[
    'DB_HOST'     => $host,
    'DB_PORT'     => $port,
    'DB_NAME'     => $dbName,
    'DB_CHARSET'  => $charset,
    'DB_USER'     => $dbUser,
    'DB_PASSWORD' => $dbPassword
] = parse_ini_file(__DIR__ . '/config/db.ini');

// Injection des paramètres de configuration dans le Data Source Name
$dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=$charset";

try {
    $pdo = new PDO(
        $dsn,
        $dbUser,
        $dbPassword
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
