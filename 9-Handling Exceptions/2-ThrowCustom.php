<?php

    function custom_exception_handler($exception){
        echo "Caught exception: " . $exception->getMessage() . "<br>";
    }

    function divide($x, $y): int{
        if ($y <= 0){
            throw new Exception("Divide by Zero Exception");
        }

        $result = $x / $y;
        return $result;
    }

    set_exception_handler("custom_exception_handler");
    divide(1,0);


?>