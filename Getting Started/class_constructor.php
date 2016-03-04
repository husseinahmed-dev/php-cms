<?php
    class Car {
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;
        
        function __construct($number) {
            echo $this->wheels = $number;
        }
    }
    
    $car1 = new Car(50);
?>