<?php
    /*
    $result = 0;
    function add($a, $b, $result = null): int{
        $addition = $a + $b;
        return $addition;
    }

    echo $result . "<br>";
    $result = add(1,2);
    echo $result . "<br>";
    */

    $result = 0;
    function add($a, $b, &$result = null){
        $result = $a + $b;
    }

    echo $result . "<br>";
    add(1,2, $result);
    echo $result . "<br>";
?>