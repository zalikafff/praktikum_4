<?php
trait EngineTrait
{
    public function startEngine()
    {
        echo "{$this->getBrand()} {$this->getModel()} mesin sedang dinyalakan.<br>";
    }

    public function stopEngine()
    {
        echo "{$this->getBrand()} {$this->getModel()} mesin sedang dimatikan.<br>";
    }
}
