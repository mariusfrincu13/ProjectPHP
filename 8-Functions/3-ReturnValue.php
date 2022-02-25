<?php

    function add($a,$b): int{
        $addition = $a + $b;
        return $addition;
    }

    echo "Result: " . add(1,2);

    function getEvenNumbers($limit): array{
        $returnArr = [];
        for ($i=0;$i<=$limit;$i++){
            if ($i%2 == 0){
                $returnArr[] = $i;
            }
        }
        return $returnArr;
    }

    $evenNumbers = getEvenNumbers(20);
    var_dump($evenNumbers);
?>