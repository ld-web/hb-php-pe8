<?php
require_once 'functions/db.php';
require_once 'classes/TextUtils.php';

var_dump($_POST);

// Récupérer toutes les images de ma table `images` dans la BDD
// Pour pouvoir toutes les afficher ensuite
try {
    $pdo = getConnection();
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
    // on met le fichier dans une variable pour une meilleure lisibilité
    $file = $_FILES['myFile'];

    var_dump($file);

    // Nom du fichier envoyé par le client : Product.png
    // --> Exemple de nom de fichier dans mon système : Product_12c3sv45s458v6.png
    // $filename = nom du fichier original . '_' . une chaîne aléatoire
    ['filename' => $uploadFilename, 'extension' => $uploadFileExt] = pathinfo($file['name']);
    $filename = $uploadFilename . '_' . TextUtils::randomString(25) . '.' . $uploadFileExt;
    var_dump($filename);
    $destination = __DIR__ . '/uploads/products/' . $filename;

    var_dump($destination);

    // Je déplace le fichier uploadé vers sa destination : dans mon projet
    // Le fichier va donc être déplacé depuis la zone de transit (/tmp/)
    // vers la destination de mon choix
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        // Je définis une variable booléenne
        // afin d'avoir une trace m'indiquant que mon upload s'est bien effectué
        $isUploaded = true;

        $insertQuery = "INSERT INTO images (`name`, `filename`) VALUES (:imageName, :imageFilename)";
        // 1 - Préparation
        $stmt = $pdo->prepare($insertQuery);
        // 2 - Exécution
        $stmt->execute([
            'imageName' => $_POST['name'],
            'imageFilename' => $filename
        ]);
    }
}

// 1 - Pas de préparation, exécution directe
// Un PDOStatement contient la requête et l'ensemble de ses résultats, une fois exécutée
$stmt = $pdo->query("SELECT * FROM images");
// $images va donc contenir, avec fetchAll, un tableau associatif de toutes les images
$images = $stmt->fetchAll();

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