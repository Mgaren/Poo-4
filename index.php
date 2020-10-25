<?php

require_once 'cars.php';


$renault = new Car('bleu', 5, 'electric');

try{
    echo $renault->start();
} catch(Exception $e){
    $hasParkBrake == false;
}  finally{
    echo "Ma voiture roule comme un donut";
}
