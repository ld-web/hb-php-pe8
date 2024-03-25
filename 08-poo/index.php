<?php

require_once 'classes/Product.php';

$product = new Product();
$product->setPriceVatFree(45);
var_dump($product);
var_dump($product->getFullPrice(0.2));

$otherProduct = new Product();
var_dump($otherProduct);
