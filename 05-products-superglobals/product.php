<?php
require_once 'layout/header.php';
require_once 'data/products.php';
require_once 'functions/product.php';

// Je récupère l'ID passé en paramètre
$id = $_GET['id'];

// Je recherche le produit correspondant à cet ID dans mon tableau de produits
// -- FOREACH --
// foreach ($products as $item) {
//     if ($item['id'] == $id) {
//         $product = $item;
//     }
// }
// ---

$product = getProduct($id, $products);

if ($product === null) {
    http_response_code(404);
    // Template 404 => require_once
    echo "Produit non trouvé";
    exit;
}

?>

<main>
    <h1><?php echo $product['name']; ?></h1>

    <h2><?php echo $product['price']; ?> €</h2>

    <div>
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" />
    </div>
</main>

<?php require_once 'layout/footer.php';
