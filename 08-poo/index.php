<?php

require_once 'classes/Product.php';
require_once 'classes/User.php';

$product = new Product();
$product->setName("Dorothy")
        ->setPriceVatFree(45);
var_dump($product);
var_dump($product->getName());
var_dump($product->getFullPrice(0.2));

$product->setName('');
var_dump($product->getName());

$otherProduct = new Product();
var_dump($otherProduct);

$user = new User();

var_dump($user);

$user->setFirstname("Eula")
     ->setLastname("Bowen");

var_dump($user->getFullname());

$admin = new User("Mabelle", "Craig");
