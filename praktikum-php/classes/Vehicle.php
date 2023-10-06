<?php
class Vehicle
{
    protected $brand;
    protected $model;

    // Properti statis
    public static $staticProperty;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function start()
    {
        echo "{$this->brand} {$this->model} sedang dinyalakan.<br>";
    }

    public function stop()
    {
        echo "{$this->brand} {$this->model} sedang dimatikan.<br>";
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    // Metode statis untuk mengakses properti statis
    public static function getStaticProperty()
    {
        return self::$staticProperty;
    }
}

// Inisialisasi properti statis
Vehicle::$staticProperty = 'Ini adalah properti statis.';
