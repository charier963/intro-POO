<?php
require_once '../src/Car.php';
require_once '../src/Bicycle.php';

$car = new Car('bleu',4,100);

$bike = new Bicycle('green',1,2);
$rockrider = new Bicycle('bleu',1, 2);
$tornado = new Bicycle('back',1 ,2);




echo $car->forward() . PHP_EOL;
echo '<br> Vitesse du vélo : ' . $car->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $car->brake() . PHP_EOL;
echo '<br> Vitesse du vélo : ' . $car->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $car->brake() . PHP_EOL;

echo $bike->forward() .PHP_EOL;
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $bike->brake() . PHP_EOL;
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $bike->brake() . PHP_EOL;
