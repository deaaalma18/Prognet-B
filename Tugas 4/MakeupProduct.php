<?php
include_once "Product.php";

class MakeupProduct extends Product {
    private $color;
    private $type;

    // Constructor
    public function __construct($name, $price, $color, $type) {
        parent::__construct($name, $price);
        $this->color = $color;
        $this->type = $type;
    }

    // Get product info
    public function getProductInfo() {
        return $this->getName() . " - " . $this->type . " (" . $this->color . ") - Rp" . $this->getPrice();
    }
}
?>
