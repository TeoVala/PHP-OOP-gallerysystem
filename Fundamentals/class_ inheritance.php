<?php

class Cars {

    var $wheels = 4;

    function greeting(){
        return "Hello";

    }


}

$bmw = new Cars();

class Trucks extends Cars{
    var $wheels = 10;

}

$toyota = new Trucks();

echo $toyota->wheels;