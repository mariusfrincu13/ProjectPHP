<?php

    $fileName = "students.csv";
    $content = file_get_contents($fileName);
    print_r($content);

    echo "<br>";
    $csvFile = file($fileName);
    var_dump($csvFile);
    foreach ($csvFile as $line){
        echo $line . "<br>";
    }

    $csvFile = file($fileName);
    var_dump($csvFile);
    foreach ($csvFile as $line){
        $data[] = str_getcsv($line);
        print_r($data);
    }

?>