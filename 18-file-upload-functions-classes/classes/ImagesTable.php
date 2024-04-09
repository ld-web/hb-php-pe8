<?php

require_once __DIR__ . '/Table.php';

class ImagesTable extends Table
{
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'images');
    }

    public function insert(array $data)
    {
        $insertQuery = "INSERT INTO " . $this->name . " (`name`, `filename`) VALUES (:imageName, :imageFilename)";
        // 1 - Préparation
        $stmt = $this->pdo->prepare($insertQuery);
        // 2 - Exécution
        $stmt->execute([
            'imageName' => $data['name'],
            'imageFilename' => $data['filename']
        ]);
    }
}
