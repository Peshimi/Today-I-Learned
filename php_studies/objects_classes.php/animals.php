<?php

#limbs, skin, tail, spiece, weight, length, height;
class Animals 
{
  private $spiece;
  public $limbs;
  public $skin;
  public $tail;
  public $weight;
  public $length;
  public $height;

  public function size () {
    return array($this->weight, $this->length, $this->height);
  }

  public function spieces ($spieces) {
    $this->spiece = $spieces;
    return $spieces;
  }
}


?>