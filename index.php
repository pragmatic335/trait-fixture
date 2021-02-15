<?php

trait PriceUtilities
{
    function calculateTax(float $price): float
    {
        return ($this->getTaxRate()/100) * $price;
    }

    abstract function getTaxRate();

}

class ShopProduct
{
    use PriceUtilities;
    public function getTaxRate(): int
    {
        return 18;
    }
}

$a = new ShopProduct();

echo $a->calculateTax(100) . PHP_EOL;
