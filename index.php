<?php

require_once("Models/Cart.php");
require_once("Models/Database.php");

$arrayCart = array();

//array_push($arrayCart, "12", "Laptop");

$arrayCart["12"] = "Laptop";
$arrayCart["1"] = "Phone";

echo $arrayCart["1"];
echo $arrayCart["12"];

$arrayCart["12"] = "Tablet";

echo $arrayCart["12"];

$cart = new Cart();

$cart->addToCart("Laptop", 1);
$cart->addToCart("Phone", 1);

$newCart = $cart->getArrayCart();

echo $newCart["Laptop"];

$cart->addToCart("Laptop", 2);

$secCart = $cart->getArrayCart();

echo $secCart["Laptop"];



//$database = new Database();
//$database->addUser("Bobby", "Little", "b.little", "testpass");