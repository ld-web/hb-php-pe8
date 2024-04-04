<?php

// Je ne peux pas utiliser $_SESSION
// avant d'avoi démarré ma session
// var_dump($_SESSION);

// session_start(), la première fois qu'elle est exécutée
// crée un identifiant de session PHP (PHPSESSID)
// qu'il va attribuer en tant que cookie au navigateur (client)
// Si l'identifiant de session existe déjà, alors il est récupéré
// automatiquement par PHP pour rétablir une session existante
session_start();

// Thème sombre/clair
// S'il n'y a rien dans la session, attribution d'un thème par défaut
if (!isset($_SESSION['theme'])) {
    $_SESSION['theme'] = 'light';
}

var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sessions thème clair/sombre</title>
    <link rel="stylesheet" href="assets/css/index.css" />
</head>
<body class="<?php echo $_SESSION['theme']; ?>">
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="about.php">À propos</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="switch_theme.php">Changer le thème</a></li>
            </ul>
        </nav>
    </header>
