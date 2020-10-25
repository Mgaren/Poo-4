<?php

require_once 'cars.php';

try{
    echo $car->start();
} catch(Exception $e){
    $hasParkBrake == false;
}  finally{
    echo "Ma voiture roule comme un donut";
}
