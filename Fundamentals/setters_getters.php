<?php

class Cars {
    private $door_count = 5;

    function get_values(){

        echo $this->door_count;


    }

    function set_values(){

        $this->door_count = 10;


    }

}



$bmw = new Cars();


$bmw->get_values();
$bmw->set_values();

