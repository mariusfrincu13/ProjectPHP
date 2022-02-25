<?php

    $a = 1;
    $b = 1;
    $c = "1";

    echo $a == $b ? 'True' : 'False';
    echo '<br>';
    echo $a == $c ? 'True' : 'False';
    echo '<br>';
    echo $a === $c ? 'True' : 'False';
    echo '<br><br>';

    echo $a != $c ? 'True' : 'False';
    echo '<br>';
    echo $a !== $c ? 'True' : 'False';
    echo '<br><br>';

    $a = 5;
    $b = 6;

    echo $a < $b ? 'True' : 'False';
    echo '<br>';
    echo $a > $b ? 'True' : 'False';
    echo '<br>';
    echo $a <= $a ? 'True' : 'False';
    echo '<br>';
    echo $a >= $b ? 'True' : 'False';
    echo '<br><br>';

    echo $b <=> $a ? 'True' : 'False';
    echo '<br>';



?>