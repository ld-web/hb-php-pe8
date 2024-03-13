<?php
require_once 'data/products.php';
require_once 'layout/header.php';
?>

<section>
    <header>
        <h1>Produits</h1>
    </header>

    <div class="products-container">
        <?php foreach ($products as $product) {
            require 'templates/product-item.php';
        } ?>
    </div>
</section>

<?php require_once 'layout/footer.php';
