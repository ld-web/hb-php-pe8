<div class="product-item">
    <div class="product-cover">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" />
    </div>
    <div class="product-infos">
        <h2>
            <?php echo $product['name']; ?>
        </h2>
        <div class="product-stars">
        <?php
        $stars = $product['stars'];
        for ($i = 0; $i < 5; $i++) {
            // require __DIR__ . '/star-' . (($i < $stars) ? 'full' : 'empty') . '.php';
            if ($i < $stars) {
                require __DIR__ . '/star-full.php';
            } else {
                require __DIR__ . '/star-empty.php';
            }
        }
        ?>
        </div>
        <h3>
            <?php echo $product['price']; ?> €
        </h3>
    </div>
</div>