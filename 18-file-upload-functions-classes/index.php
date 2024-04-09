<?php
require_once 'functions/db.php';
require_once 'classes/FileUpload.php';
require_once 'classes/ImagesTable.php';

// Récupérer toutes les images de ma table `images` dans la BDD
// Pour pouvoir toutes les afficher ensuite
try {
    $pdo = getConnection();
    $imagesDb = new ImagesTable($pdo);
} catch (PDOException) {
    echo "Erreur lors de la connexion à la base de données";
    exit;
}

// J'initialise ma variable à une valeur par défaut
// Par défaut, je n'ai pas encore uploadé.
// $isUploaded prend donc la valeur false
$isUploaded = false;

// Ce if vérifie si un fichier est en train d'être uploadé
// C'est-à-dire si un utilisateur a soumis le formulaire
// en renseignant un fichier dans le champ 'myFile'
if (isset($_FILES['myFile']) && isset($_POST['name']) && !empty($_POST['name'])) {
    try {
        // on met le fichier dans une variable pour une meilleure lisibilité
        $file = $_FILES['myFile'];
        $fileUpload = new FileUpload(
            $file,
            __DIR__ . "/uploads/products"
        );
        $uploadedFilename = $fileUpload->upload();
        $isUploaded = true;
        $imagesDb->insert([
            'name' => $_POST['name'],
            'filename' => $uploadedFilename
        ]);
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
}

$images = $imagesDb->findAll();

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

    <div>
        <?php foreach ($images as $image) { ?>
        <div style="margin-bottom: 2rem;">
        <!--          uploads/products/           Product.png       -->
            <img src="uploads/products/<?php echo $image['filename']; ?>" alt="<?php echo $image['name']; ?>" />
        </div>
        <?php } ?>
    </div>
</body>
</html>