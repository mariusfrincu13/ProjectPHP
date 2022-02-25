<?php

    // Create simple string
    $string = "Hi, I'm Marius";
    $string2 = "I'm 22";
    echo $string . '<br>';
    echo $string2 . '<br>';

    echo "<br>";
    // String concatenation
    echo "Hello " . " World" . "<br>";

    echo "<br>";
    // String functions
    echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
    echo "2 - " . trim($string) . '<br>' . PHP_EOL;
    echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
    echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
    echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
    echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
    echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
    echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
    echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
    echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
    echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
    echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Change into world
    echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
    echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
    echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
    echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;

    echo "<br>";
    $invoiceNumber = 100;
    $invoiceNumber2 = 123456;
    echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
    echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
    echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;

    echo "<br>";
    // Multiline text and line breaks
    $longText = "
      Hello, my name is Marius
      I am 22,
      I am learning
    ";
    echo $longText . PHP_EOL;
    echo nl2br($longText) . '<br>' . PHP_EOL;

    echo "<br>";
    // Multiline text and reserve html tags
    $longText = "
      Hello, my name is <b>Marius</b>
      I am <b>22</b>,
      I am learning
    ";
    echo "1 - " . $longText . '<br>';
    echo "2 - " . nl2br($longText) . '<br>';
    echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
    echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
    echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
    echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;

?>