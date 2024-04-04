<?php

session_start();

// $path = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
// var_dump($path);
// exit;

// Aucun thème n'a encore été défini
if (!isset($_SESSION['theme']) || $_SESSION['theme'] === 'dark') {
    $_SESSION['theme'] = 'light'; // Thème par défaut
} else {
    $_SESSION['theme'] = 'dark';
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
