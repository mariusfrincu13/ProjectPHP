<?php

    //INTEGER
    $x = 5985;
    var_dump($x);

    //FLOAT
    $x = 10.365;
    var_dump($x);

    //BOOLEAN
    $x = true;
    $y = false;
    var_dump($x);
    var_dump($y);

    //NULL
    $x = "Hello world!";
    $x = null;
    var_dump($x);

    //STRING
    $x = "Hello world!";
    var_dump($x);

    //ARRAY
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);

    //OBJECT
    class Car
    {
        public $color;
        public $model;

        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }

        public function message()
        {
            return "Car: " . $this->color . " " . $this->model;
        }
    }

    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar->message();

?>