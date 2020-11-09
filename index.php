<?php

require_once 'bike.php';
require_once 'cars.php';
require_once 'skateboard.php';
require_once 'interface.php';


$bike = new Bike("vert", 1, "electrique");
$bike->setNbWheels(1);
$bike->setCurrentSpeed(11);
echo $bike->switchOn();
echo "<br>";
echo $bike->switchOff();
echo "<br>";

$voiture = new Car("bleu", 5, "electrique");
$voiture->setNbWheels(4);
echo $voiture->switchOn();
echo "<br>";
echo $voiture->switchOff();
echo "<br>";

var_dump($bike);
echo "<br>";
var_dump($voiture);