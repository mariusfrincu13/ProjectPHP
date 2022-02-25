<?php

    $a = true;
    $b = false;

    // && and AND
    echo $a && $b ? 'True' : 'False';
    echo '<br>';
    echo $a and $b ? 'True' : 'False';
    echo '<br><br>';

    // || and OR
    echo $a || $b ? 'True' : 'False';
    echo '<br>';
    echo $a OR $b ? 'True' : 'False';
    echo '<br><br>';

    // XOR
    echo ($a XOR $b) ? 'True' : 'False';
    echo '<br><br>';

    //NOT
    echo !$a ? 'True' : 'False';
    echo '<br><br>';


?>