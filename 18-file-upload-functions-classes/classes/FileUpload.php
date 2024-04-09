<?php

require_once __DIR__ . '/TextUtils.php';

class FileUpload
{
    public function __construct(
        private array $file, // issu de $_FILES
        private string $destination // chemin vers le dossier d'upload
    ) {
        // Opérations de contrôle
        // Taille, format du fichier
    }

    public function upload(): string
    {
        // Nom du fichier envoyé par le client : Product.png
        // --> Exemple de nom de fichier dans mon système : Product_12c3sv45s458v6.png
        // $filename = nom du fichier original . '_' . une chaîne aléatoire
        [
            'filename' => $uploadFilename,
            'extension' => $uploadFileExt
        ] = pathinfo($this->file['name']);

        $filename = $uploadFilename . '_' . // nom original suivi d'un '_'
                    TextUtils::randomString(25) . // chaîne aléatoire
                    '.' . $uploadFileExt; // extension

        // /var/www/html/18-file-upload-functions-classes/uploads/products/Product_123abc.png
        $finalDestinationAbsolutePath = $this->destination . '/' . $filename;

        if (!move_uploaded_file(
            $this->file['tmp_name'], // Depuis la zone de transit
            $finalDestinationAbsolutePath // vers notre dossier d'upload
        )) {
            throw new RuntimeException("Impossible d'uploader le fichier");
        }

        return $filename;
    }
}
