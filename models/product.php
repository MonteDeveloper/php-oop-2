<?php

include 'category.php';

class Product {
    private $name;
    private $price;
    private $description;
    private $category;
    private $imagePath;

    public function __construct($name, $price, $description, $category, $imagePath) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->imagePath = $imagePath;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        if ($category instanceof Category) {
            $this->category = $category;
        } else {
            throw new Exception("Il valore passato deve essere un'istanza della classe Category");
        }
    }

    public function setImagePath($imagePath) {
        $this->imagePath = $imagePath;
    }

    public function getImagePath() {
        return $this->imagePath;
    }
}


?>