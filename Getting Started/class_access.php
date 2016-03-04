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
    
    $car1 = new Car();
    $car2 = new Car();
    
    echo "Car1 has " . $car1->wheels . " Wheels<br>";
    echo "Car2 has " . $car2->wheels = 10 . " Wheels<br>";
    
    echo "Car2 doors " . $car2->doors . "<br>";
    $car2->createDoors();
    echo "Car2 doors after createDoors() " . $car2->doors;
?>