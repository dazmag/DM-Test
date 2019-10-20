<?php

class Cart {

    private $arrayCart = array();

    public function getArrayCart() {
        return $this->arrayCart;
    }

    public function addToCart($itemID, $quantity) {
        if (count($this->arrayCart) < 10) { // Check cart size is less than 10
            if (array_key_exists($itemID, $this->arrayCart)) { // Check if item key exists
                if (count($this->arrayCart[$itemID]) < 10) { // Check item quantity size
                    if (($this->arrayCart[$itemID] + $quantity) > 10) { // Check if quantity is greater then 10
                        $this->arrayCart[$itemID] = 10; // Set limit to 10
                    } else {
                        $this->arrayCart[$itemID] += $quantity; // Add on to current quantity
                    }
                }
            } else {
                $this->arrayCart[$itemID] = $quantity; // Add new item to cart
            }
        }
    }

    public function removeFromCart($itemID) {
        unset($this->arrayCart[$itemID]);


    }
}