<?php
class Product {
    private $name;
    private $price;

    // Constructor
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Getter for name
    public function getName() {
        return $this->name;
    }

    // Setter for name
    public function setName($name) {
        $this->name = $name;
    }

    // Getter for price
    public function getPrice() {
        return $this->price;
    }

    // Setter for price
    public function setPrice($price) {
        $this->price = $price;
    }
}
?>
