<?php

class Cars {

    var $wheel_count = 4;
    var $door_count = 4;


    function car_detail(){
         return "This car has ". $this->wheel_count. " wheels!";

    }

}


/*
    Show all classes that are declared
  $my_classes = get_declared_classes();

foreach ($my_classes as $class) {
    echo $class. "<br>";
}


    Show all methods of the class
$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method) {
    echo $method. "<br>";

}
*/

$bmw = new Cars();
$mercedes = new Cars();

$bmw->car_detail();

echo $bmw->wheel_count;
echo $bmw->wheel_count = 10;

echo $mercedes->car_detail();
