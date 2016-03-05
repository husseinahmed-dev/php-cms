<?php
    class Car {
        static $wheels = 4;
        var $hood = 1;
        
        function moveWheels() {
            echo "Wheels moving" . "<br>";
            Car::$wheels = 8;
        }
    }
    
    $car1 = new Car();
    
    echo Car::$wheels;
    Car::moveWheels();
?>