<?php

    declare(strict_types=1);

    function printOddNumbers(int $limit, $skipNumber=-1){
        for ($i=0;$i<=$limit;$i++){
            if ($i == $skipNumber){
                continue;
            }
            if ($i%2 != 0){
                echo "Odd number: $i <br>";
            }
        }
    }

    function printEvenNumbers(int $limit){
        for ($i=0;$i<=$limit;$i++){
            if ($i%2 == 0){
                echo "Even Number: $i <br>";
            }
        }
    }

    printOddNumbers(30);
    printEvenNumbers(20);
?>