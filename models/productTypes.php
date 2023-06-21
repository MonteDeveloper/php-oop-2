<?php

class Food extends Product {
    private $expirationDate;

    public function __construct($name, $price, $description, $category, $imagePath, $expirationDate) {
        parent::__construct($name, $price, $description, $category, $imagePath);
        $this->expirationDate = $expirationDate;
    }

    public function getExpirationDate() {
        return $this->expirationDate;
    }

    public function setExpirationDate($expirationDate) {
        $this->expirationDate = $expirationDate;
    }
}

class Toy extends Product {
    private $minAge;
    private $material;

    public function __construct($name, $price, $description, $category, $imagePath, $minAge, $material) {
        parent::__construct($name, $price, $description, $category, $imagePath);
        $this->minAge = $minAge;
    }

    public function getMinAge() {
        return $this->minAge;
    }

    public function setMinAge($minAge) {
        $this->minAge = $minAge;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function setMaterial($material) {
        $this->material = $material;
    }
}

class Collar extends Product {
    private $size;
    private $color;

    public function __construct($name, $price, $description, $category, $imagePath, $size, $color) {
        parent::__construct($name, $price, $description, $category, $imagePath);
        $this->size = $size;
        $this->color = $color;
    }

    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }
}


?>
