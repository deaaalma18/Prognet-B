<?php
class Cart {
    private $products = [];

    // Add product to cart
    public function addProduct($product) {
        $this->products[] = $product;
    }

    // Get all products in cart
    public function getProducts() {
        return $this->products;
    }
}
?>
