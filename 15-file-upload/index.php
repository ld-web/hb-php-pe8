<?php
var_dump($_POST);
// var_dump($_FILES);

// J'initialise ma variable à une valeur par défaut
// Par défaut, je n'ai pas encore uploadé.
// $isUploaded prend donc la valeur false
$isUploaded = false;

// Ce if vérifie si un fichier est en train d'être uploadé
// C'est-à-dire si un utilisateur a soumis le formulaire
// en renseignant un fichier dans le champ 'myFile'
if (isset($_FILES['myFile'])) {
    // on met le fichier dans une variable pour une meilleure lisibilité
    $file = $_FILES['myFile'];

    var_dump($file);

    $destination = __DIR__ . '/uploads/products/' . $file['name'];

    var_dump($destination);

    // Je déplace le fichier uploadé vers sa destination : dans mon projet
    // Le fichier va donc être déplacé depuis la zone de transit (/tmp/)
    // vers la destination de mon choix
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        // Je définis une variable booléenne
        // afin d'avoir une trace m'indiquant que mon upload s'est bien effectué
        $isUploaded = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <h1>Upload</h1>

    <?php if ($isUploaded) { ?>
        <div style="background-color: #00bf49; color: #FFF; max-width: 50%;">
            Fichier enregistré
        </div>
    <?php } ?>

    <form method="POST" enctype="multipart/form-data">
        <div>
            <input type="text" name="name" />
        </div>
        <input type="file" name="myFile" />
        <input type="submit" value="Envoyer" />
    </form>

    <img src="uploads/products/Product.png" alt="Produit uploadé" />
</body>
</html>