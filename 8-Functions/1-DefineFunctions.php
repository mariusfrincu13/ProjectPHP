<?php

    function printEvenNumbers($limit){
        for ($i=0;$i<=$limit;$i++){
            if ($i%2 == 0){
                echo "Even Number: $i <br>";
            }
        }
    }

    printEvenNumbers(30);

    function add($a,$b){
        return $a + $b;
    }

    echo "<br>" . add(10,20) . "<br>";
?>