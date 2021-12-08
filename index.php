<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';

//bike

echo 'Velo :';
$bike = new Bicycle('bleu');
// var_dump($bike); Affiche l'array de départ
echo '<br>Couleur : ' . $bike->getColor() . PHP_EOL;

//$bike->setcolor ('red'); Change la couleur pour tester
//echo '<br>Couleur : ' . $bike->getColor() . PHP_EOL; Affiche la nouvelle couleur
echo "<br>";
// var_dump($bike); // then, another dump for showing changes

// Moving bike
echo $bike->forward();
echo '<br><br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $bike->brake();

// -------------------------------------------- Car 1 --------------------------------------------
echo '<br><br>----------------------------------------------------------------------------------------';
echo '<br><br>Voiture :<br>';
$car = new Car('Red',5,'Electrique',0);

echo '<br>Couleur : ' . $car->getColor() . PHP_EOL;
echo '<br>Nombre de sièges: ' . $car->getNbSeats() . PHP_EOL;
echo '<br>Type d\'énergie : ' . $car->getEnergy() . PHP_EOL;
echo '<br>Vitesse : ' . $car->getCurrentSpeed() . PHP_EOL;

// Starting car
echo '<br>' . $car->start();

// Moving car
echo '<br>' . $car->forward();

// Starting car when already moving
echo '<br>' . $car->start();

// Stoping car
echo '<br><br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $car->brake();



// -------------------------------------------- Car 2 --------------------------------------------
echo '<br><br>----------------------------------------------------------------------------------------';
echo '<br><br>Voiture :<br>';
$car = new Car('Blue',3,'Diesel',15);

echo '<br>Couleur : ' . $car->getColor() . PHP_EOL;
echo '<br>Nombre de sièges: ' . $car->getNbSeats() . PHP_EOL;
echo '<br>Type d\'énergie : ' . $car->getEnergy() . PHP_EOL;

// Moving car
echo '<br>' . $car->forward();
echo '<br><br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $car->brake();