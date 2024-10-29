<?php
include_once 'AbstractProduct.php';

class Product extends AbstractProduct {
    protected static $totalProducts = 0;  // Perbaikan: menggunakan protected
    protected $price; // Perbaikan: menggunakan protected

    public function __construct($name, $price, $brand) {
        parent::__construct($name, $price, $brand);
        $this->setPrice($price);
        self::$totalProducts++;
    }

    public static function getTotalProducts() {
        return self::$totalProducts;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        if ($price > 0) {
            $this->price = $price;
        }
    }

    public function getInfo() {
        return "<p><strong>{$this->name}</strong> oleh {$this->brand}: Rp {$this->price}</p>";
    }
}
?>
