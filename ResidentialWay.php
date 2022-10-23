<?php


require_once 'Vehicle.php';
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        parent::SetNbLane(2);
        parent::SetMaxSpeed(50);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $this->setCurrentVehicles($vehicle);
    }
}