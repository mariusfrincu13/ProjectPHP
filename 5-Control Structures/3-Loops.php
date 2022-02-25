<?php

    // WHILE
    $counter = 0; // When counter is 10??
    while ($counter < 10) {
        echo $counter.'<br>';
        $counter++;
    }
    echo "<br>";

    // DO-WHILE
    $counter = 0; // When counter is 10?
    do {
        echo $counter.'<br>';
        $counter++;
    } while ($counter < 10);
    echo "<br>";

    // FOR
    for ($i = 0; $i < 10; $i++) {
        echo $i."<br>";
    }
    echo "<br>";

    // FOREACH
    $fruits = ["Banana", "Apple", "Orange"];
    foreach ($fruits as $i => $fruit) {
        echo $i . ' ' . $fruit . '<br>';
    }
    echo "<br>";

    // Iterate Over associative array.
    $person = [
        'name' => 'Brad',
        'surname' => 'Traversy',
        'age' => 30,
        'hobbies' => ['Tennis', 'Video Games'],
    ];
    foreach ($person as $key => $value) {
        if ($key === 'hobbies') {
            break;
        }
        echo $key . ' ' . $value . '<br>';
    }

?>