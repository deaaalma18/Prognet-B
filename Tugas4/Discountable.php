<?php
interface Discountable {
    public function applyDiscount($percentage, $minPrice = 0);
}
?>
