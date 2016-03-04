<?php
    class Car {
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;
        
        function moveWheels() {
            echo "Wheels moving" . "<br>";
            $this->wheels = 8;
        }
        
        function createDoors() {
            $this->doors = 6;
        }
    }
    
    class Plane extends Car {
        var $wheels = 40;
    }
    
    $jet = new Plane();
    echo $jet->wheels;
?>