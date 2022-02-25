<?php

    $value = 1;
    while(true){
        $result = $value % 2;

        if ($result == 1) {
            $value++;
            continue;
        }

        if ($value > 10){
            break;
        }

        echo 'Even numbers: ' . $value . '<br>';
        $value++;
    }

?>