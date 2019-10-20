<?php

class Product {

    private $id = 0;
    private $name = "";
    private $description = "";
    private $price = 0;
    private $photoName = "";

    public function __construct($id, $name, $description, $price, $photoName) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->photoName = $photoName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getPhotoName()
    {
        return $this->photoName;
    }
}