<?php

    $inputvalue = 0;
    if($inputvalue <= 0){
        goto error_block;
    }

    exit();
    error_block:
        echo "Error Block <br>";

    for ($i=0; $i<=10; $i++){
        if($i == 2){
            goto loop2;
        }
    }

    loop2:
        echo "Counter value is $i <br>";
?>