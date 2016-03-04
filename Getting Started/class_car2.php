<?php
    class Car {
        function moveWheels() {
            echo "Wheels moving";
        }
    }
    
    if (method_exists("Car", "moveWheels")) {
        echo "The method moveWheels() exists";
    }
?>