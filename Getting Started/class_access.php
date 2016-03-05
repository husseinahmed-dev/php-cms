<?php
    class Car {
        public $wheels = 4;     // same as var
        protected $hood = 1;    // this class or subclasses
        private $engine = 1;    // only this class
        var $doors = 4;         // same as public
        
        function moveWheels() {
            echo "Wheels moving" . "<br>";
            $this->wheels = 8;
        }
        
        function showHood() {
            echo $this->hood;
        }
    }
    
    $car1 = new Car();
    
    echo $car1->wheels . "<br>";
    //echo $car1->hood . "<br>";      //won't work
    $car1->showHood();
?>