<?php

class Car {

  private static $instance = NULL;


  /**
   * @return null
   */
  public static function getInstance() {
    if (self::$instance == NULL) {
      self::$instance = new Car();
    }
    return self::$instance;
  }


  public function getName($name) {
    return $name . PHP_EOL;
  }
}


$car1 = Car::getInstance();
echo $car1->getName('BMW');

$car2 = Car::getInstance();
echo $car2->getName('Audi');
//
$car3 = Car::getInstance();
echo $car3->getName('Mercedes');

var_dump($car1);
var_dump($car2);
var_dump($car3);