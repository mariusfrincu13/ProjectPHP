<?php

    //IF
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    }

    //IF ELSE
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }

    //ELSE IF
    $t = date("H");

    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }

?>