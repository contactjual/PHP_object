<?php

// create object 

class car {
    var $name;
    var $model;
    function car_details($naming, $model_num){
        global $name, $model;
        echo "This is the $naming car and model is $model_num <br>";
    }
}

$my_car_obj = new car;

$my_car_obj-> car_details("BMW", "3ibmw");
$my_car_obj-> car_details("Toyota", "4ttai");
$my_car_obj-> car_details("5G", "9ig");



?>