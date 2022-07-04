<?php

// 1. Create a Basket Class
class Basket
{
  // 2. Add itemsTotal and shippingCost public Properties
  public $itemsTotal;
  public $shippingCost;

  public function calculateSubTotal() {
    $subTotal = $this->itemsTotal + $this->shippingCost;
    return $subTotal;
  }
}

// 3. Instantiate a Basket using the new keyword
$basket = new Basket();
// 4. Set values for both properties
$basket->itemsTotal = 50;
$basket->shippingCost = 10;
// 5. Use var_dump() to check it
//var_dump($basket);

//var_dump($basket->calculateSubTotal());
$subTotal = $basket->calculateSubTotal();
var_dump($subTotal);

?>