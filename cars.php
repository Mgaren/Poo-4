<?php

require_once 'vehicule.php';

class Car extends Vehicle
{
    /*
    const ENERGIES = [
        'fuel',
        'electric',
    ];
    */

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start(): string
    {
        if($hasParkBrake === true){
            throw new Exception("parkbrake activated");
        }
        return "Let's go!";
        
    }

    public function setParkBrake()
    {
        $this->hasParkBrake = $hasParkBrake;
    }
}