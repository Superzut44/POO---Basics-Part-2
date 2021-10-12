<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

var_dump($bike);
$bike->dump();

$blueCar = new Car('blue', 4, 'gasoline');
var_dump($blueCar);

echo $blueCar->forward();
echo '<br> Vitesse de la voitue : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueCar->brake();
echo '<br> Vitesse de la voiture : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br>';