<?php

    //Define a Variable
    $name = "John Smith";

    //Variable can be used as String and Integer
    $message = 1;
    $message = "PHP";
    echo $message . "<br>";

    //Print variable with double quotes
    echo "Name variable = $name" . "<br>";
    echo "Name variable = $name" . "<br>";

    //Variable Typing converting the string to integer and vice versa
    $length = "10";
    $breath = 20;
    $area = $length * $breath;
    echo "Area: $area" . "<br>";

    //Variable is case sensitive
    $Name = "Walter White";
    echo "$name is not equal to $Name" . "<br>";

    //Variable Scope
    $counter = 1;
    function show_counter(){
        $counter = 2;
        echo $counter;
    }
    show_counter();
    echo $counter . "<br>";

    //Global Variables
    global $count;
    function show_count(){
        $count = 2;
        echo $count;
    }
    show_count();
    echo $count . "<br>";

    //Static Variable
    function counter_static(){
        static $count = 1;
        echo $count . "<br>";
        $count += 1;
    }
    counter_static();

    //Predefined Variables
    function print_global_variables(){
        echo $GLOBALS['count'] . "<br>";
    }

    print_global_variables();

    //Variable of Variables
    $countofcount = "count";
    echo $$countofcount;

    //isset function
    echo isset($$countofcount) ? "Variable is Set" : "Variable is not set";
?>