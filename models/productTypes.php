<?php

include 'product.php';

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
    use PhysicalObject;

    public function __construct($name, $price, $description, $category, $imagePath, $minAge, $x, $y, $z, $weight, $material, $color) {
        parent::__construct($name, $price, $description, $category, $imagePath);
        $this->minAge = $minAge;
        $this->setSize($x, $y, $z);
        $this->setWeight($weight);
        $this->setMaterial($material);
        $this->setColor($color);
    }

    public function getMinAge() {
        return $this->minAge;
    }

    public function setMinAge($minAge) {
        $this->minAge = $minAge;
    }
}

class Collar extends Product {
    use PhysicalObject;

    public function __construct($name, $price, $description, $category, $imagePath, $x, $y, $z, $weight, $material, $color) {
        parent::__construct($name, $price, $description, $category, $imagePath);
        $this->setSize($x, $y, $z);
        $this->setWeight($weight);
        $this->setMaterial($material);
        $this->setColor($color);
    }
}

trait PhysicalObject {
    private $weight;
    private $material;
    private $size;
    private $color;

    public function getSize() {
        return $this->size;
    }

    public function setSize($x, $y, $z) {
        $this->size = [$x, $y, $z];
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function setMaterial($material) {
        $this->material = $material;
    }
}


?>
