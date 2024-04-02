<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <main>
        <h1>INSCRIPTION</h1>
        <form action="register_process.php" method="post">
            <div><label for="name">Nom :</label><input type="text" name="name" id="name" /></div>
            <div><label for="email">Email :</label><input type="email" name="email" id="email" /></div>
            <div><label for="password">Mot de passe :</label><input type="password" name="password" id="password" /></div>
            <div><input type="submit" value="Inscription" /></div>
        </form>
    </main>
</body>
</html>