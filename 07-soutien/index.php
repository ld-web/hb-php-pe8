<?php require_once "afficherCarre.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soutien</h1>
    <h2>Carré d'étoiles</h2>
    <h3>Taille 2</h3>
    <?php echo construireCarre(2); ?>
    <h3>Taille 8</h3>
    <?php echo construireCarre(8); ?>
    <h3>Taille 16</h3>
    <?php echo construireCarre(16); ?>
    <h3>Taille 7</h3>
    <?php echo construireCarre(7); ?>
</body>
</html>