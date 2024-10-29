<?php
include_once 'Product.php';
include_once 'Discountable.php';

class Lipstick extends Product implements Discountable {
    private $shade;

    public function __construct($name, $price, $brand, $shade) {
        parent::__construct($name, $price, $brand);
        $this->shade = $shade;
    }

    public function applyDiscount($percentage, $minPrice = 0) {
        if ($this->price > $minPrice) {
            $this->price -= ($this->price * ($percentage / 100));
        }
    }

    public function getInfo() {
        return parent::getInfo() . "<p>Warna: {$this->shade}</p>";
    }
}
?>
