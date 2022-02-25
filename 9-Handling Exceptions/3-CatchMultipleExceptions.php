<?php

    function custom_exception_handler($exception){
        echo "Caught exception: " . $exception->getMessage() . "<br>";
    }

    function divide($x, $y): int{

        try{
            if ($y <= 0){
                throw new Exception("Divide by Zero Exception");
            }

            $result = $x / $y;

        }catch (Exception $e){
            throw new Exception("Divide method input param is less than zero" . $e->getMessage());
        }

        return $result;
    }

    set_exception_handler("custom_exception_handler");
    divide(1, 0);

?>