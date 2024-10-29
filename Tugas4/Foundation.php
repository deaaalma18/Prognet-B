<?php
include_once 'Product.php';
include_once 'Discountable.php';

class Foundation extends Product implements Discountable {
    private $skinType;

    public function __construct($name, $price, $brand, $skinType) {
        parent::__construct($name, $price, $brand);
        $this->skinType = $skinType;
    }

    public function applyDiscount($percentage, $minPrice = 0) {
        if ($this->price > $minPrice) {
            $this->price -= ($this->price * ($percentage / 100));
        }
    }

    public function getInfo() {
        return parent::getInfo() . "<p>Tipe Kulit: {$this->skinType}</p>";
    }
}
?>
