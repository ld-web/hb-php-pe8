<?php

[
    'name' => $name,
    'email' => $email,
    'password' => $password
] = $_POST;

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


$query = "INSERT INTO users (name, email, `password`) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($query);

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$stmt->execute([$name, $email, $hashedPassword]);

header('Location: index.php');
exit;
