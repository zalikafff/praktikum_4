<?php
class Car extends Vehicle
{
    private $numDoors;

    public function __construct($brand, $model, $numDoors)
    {
        parent::__construct($brand, $model);
        $this->numDoors = $numDoors;
    }

    public function honk()
    {
        echo "{$this->getBrand()} {$this->getModel()} sedang membunyikan klakson.<br>";
    }

    public function getNumDoors()
    {
        return $this->numDoors;
    }
}
