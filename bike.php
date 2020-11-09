<?php

require_once 'vehicule.php';
require_once 'interface.php';

class Bike extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if($this->currentSpeed > 10) {
            return true;
        } else {
            return false;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}