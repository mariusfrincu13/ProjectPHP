<?php

    $addFunction = function($a,$b) : int{
        $addition = $a+$b;
        return $addition;
    };

    echo $addFunction(1,2);
?>