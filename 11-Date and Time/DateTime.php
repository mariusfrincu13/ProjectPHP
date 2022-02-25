<?php

    // Print current date
    echo date('Y-m-d H:i:s') . '<br>';

    echo "<br>";
    // Print yesterday
    echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';

    echo "<br>";
    // Different format:
    echo date('F j Y, H:i:s') . '<br>';

    echo "<br>";
    // Print current timestamp
    echo time() . '<br>';
    echo date('Y-m-d H:i:s', time()) . "<br>";

    echo "<br>";
    // Parse date:
    $dateString = '2020-02-06 12:45:35';
    $parsedDate = date_parse($dateString);
    var_dump($parsedDate);

    echo "<br>";
    // Parse date from format:
    $dateString = 'February 4 2020 12:45:35';
    $parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
    var_dump($parsedDate);

?>