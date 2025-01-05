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




class man {
    public $name;
    public $age;
    function details ($fname, $years) {
        $this->name = $fname;
        $this->age = $years;
        return "$this->name's age is $this->age years <br>";
    }
}
$man_obj = new man;
echo $man_obj -> details("Jual", 19);




// __construct funciton ....................... [auto exicute]

// class human {
//     public $name;
//     public $age;
//     function __construct ($name, $age) {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     function info () {
//         return "name: $this->name and age: $this->age <br>";
//     }
// }
// $human_obj = new human("Ratul", 30);
// echo $human_obj-> info ();



// __destruct funciton .......................[auto exicute]

class human {
    public $name;
    public $age;
    function __construct ($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    function __destruct () {
        echo "name: $this->name and age: $this->age <br>";
    }
}
$human_obj = new human("Ratul", 30);
    


?>