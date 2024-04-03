<?php

require_once 'classes/Product.php';
require_once 'classes/ProductRect.php';

$cadre = new ProductRect(
    21,
    297,
    price: 26
);

var_dump($cadre);

echo $cadre->getDescription();
