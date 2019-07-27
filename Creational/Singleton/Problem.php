<?php

class Car {

  public function __construct() {
  }

  public function getName($name) {
    return $name . PHP_EOL;
  }
}

$car1 = new Car();
echo $car1->getName('BMW');

$car2 = new Car();
echo $car2->getName('Audi');

$car3 = new Car();
echo $car3->getName('Mercedes');

var_dump($car1);
var_dump($car2);
var_dump($car3);