<?php

require ("Models/Product.php");

$view = new stdClass();
$view->pageTitle = "Products";

$arrayProducts = [];
$arrayProducts[] = new Product(1, "Laptop", "This is a laptop", 200, "darren.jpg");
$arrayProducts[] = new Product(2, "Computer", "This is a computer", 1000, "");
$arrayProducts[] = new Product(3, "Phone", "This is a phone", 100, "");
$arrayProducts[] = new Product(4, "Tablet", "This is a tablet", 150, "");

//foreach ($arrayProducts as $product) {
//    echo $product->getName();
//}

$view->products = $arrayProducts;

require ("Views/products.phtml");