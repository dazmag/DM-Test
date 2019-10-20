<?php

class Item {
    var $id = 0;
    var $name = "";
    var $description = "";
    var $price = "";

    public function __construct($id, $name, $description, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
    public function getPrice(): string
    {
        return $this->price;
    }
}