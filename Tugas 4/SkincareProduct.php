<?php
include_once "Product.php";

class SkincareProduct extends Product {
    private $skinType;

    // Constructor
    public function __construct($name, $price, $skinType) {
        parent::__construct($name, $price);
        $this->skinType = $skinType;
    }

    // Get product info
    public function getProductInfo() {
        return $this->getName() . " - For " . $this->skinType . " - Rp" . $this->getPrice();
    }
}
?>
