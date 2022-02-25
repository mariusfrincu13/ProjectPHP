<?php

    $a = 5; //0101
    $b = 2; //0010

    // & (AND)
    $r = $a & $b; //0000 = 0
    echo $r . "<br>";

    // | (OR)
    $r = $a | $b; //0111 = 7
    echo $r . "<br>";

    // ^ (XOR)
    $r = $a ^ $b; //0111 = 7
    echo $r . "<br>";

    // ~ (NOT)
    $r = ~$a; //1010 = 6
    echo $r . "<br>";

    // << (SHIFT LEFT)
    $r = $a << 2; //10100 = 16+4 = 20
    echo $r . "<br>";

    // >> (SHIFT RIGHT)
    $r = $a >> 1; //0010 = 2
    echo $r . "<br>";

?>