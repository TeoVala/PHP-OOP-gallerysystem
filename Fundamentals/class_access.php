<?php

class Cars {

    public $wheel_count = 4;
    private $door_count = 5;
    protected $seat_count = 15;

    function car_detail(){
        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->seat_count;

    }

}



$bmw = new Cars();

/*echo $bmw->wheel_count;*/

$bmw->car_detail();