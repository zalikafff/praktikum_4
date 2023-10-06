<?php
class Motorcycle extends Vehicle
{
    use EngineTrait;

    public function wheelie()
    {
        echo "{$this->getBrand()} {$this->getModel()} sedang melakukan wheelie.<br>";
    }
}
