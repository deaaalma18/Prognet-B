<?php
abstract class AbstractProduct {
    protected $name;
    protected $price;
    protected $brand;

    public function __construct($name, $price, $brand) {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
    }

    abstract public function getInfo();
}
?>
