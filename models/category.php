<?php

class Category {
    private $name;
    private $description;
    private $icon;

    public function __construct($name) {
        $this->name = $name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setIcon($icon) {
        $this->icon = $icon;
    }

    public function getIcon() {
        return $this->icon;
    }
}

?>