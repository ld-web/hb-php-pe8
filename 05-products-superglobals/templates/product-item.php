<div class="product-item">
    <div class="product-cover">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" />
    </div>
    <div class="product-infos">
        <h2>
            <a href="product.php?id=<?php echo $product['id']; ?>">
                <?php echo $product['name']; ?>
            </a>
        </h2>
        <div class="product-stars">
            *****
        </div>
        <h3>
            <?php echo $product['price']; ?> €
        </h3>
    </div>
</div>