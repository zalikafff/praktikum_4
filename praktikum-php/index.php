<?php

// Autoloading
spl_autoload_register(function ($class) {
    // Tentukan direktori utama untuk kelas, trait, dan interface
    $directories = ['classes', 'traits', 'interfaces'];

    foreach ($directories as $directory) {
        $file = $directory . '/' . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// Membuat objek Car
$car = new Car('Toyota', 'Camry', 4);
$car->start();
$car->honk();
$car->stop();
echo "Jumlah pintu: {$car->getNumDoors()}<br>";

// Membuat objek Motorcycle
$motorcycle = new Motorcycle('Honda', 'CBR');
$motorcycle->start();
$motorcycle->wheelie();
$motorcycle->stop();

// Static properties dan static method
Vehicle::$staticProperty = 'Ini adalah properti statis.';
echo Vehicle::getStaticProperty();
