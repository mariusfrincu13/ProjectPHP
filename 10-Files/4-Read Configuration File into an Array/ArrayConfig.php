<?php

    $settings = parse_ini_file("test.ini");
    print_r($settings);

    echo "<br>";
    foreach ($settings as $key => $val){
        echo $key . " => " .$val . "<br>";
    }



?>