<?php
require_once 'data/products.php';
require_once 'layout/header.php';

const NB_PRODUCTS_PER_PAGE = 10;
$pageNumber = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($pageNumber === 0) {
    $pageNumber = 1;
}

$idxStart = NB_PRODUCTS_PER_PAGE * ($pageNumber - 1);

$items = array_slice($products, $idxStart, NB_PRODUCTS_PER_PAGE);

$nbPages = ceil(count($products) / NB_PRODUCTS_PER_PAGE);
var_dump($nbPages);
?>

<section>
    <header>
        <h1>Produits</h1>
    </header>

    <div class="products-container">
        <?php foreach ($items as $product) {
            require 'templates/product-item.php';
        } ?>
    </div>

    <div id="pagination">
        <?php for($i = 1; $i <= $nbPages; $i++) { ?>
            <span>
                <?php if ($pageNumber === $i) { ?>
                    <?php echo $i; ?>
                <?php } else { ?>
                    <a href="index.php?page=<?php echo $i; ?>">
                    <?php echo $i; ?>
                    </a>
                <?php } ?>
            </span>
        <?php } ?>
    </div>
</section>

<?php require_once 'layout/footer.php';
