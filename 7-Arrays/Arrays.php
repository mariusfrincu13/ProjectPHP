<?php

    // Create array
    $fruits = ["Banana", "Apple", "Orange"];

    // Print the whole array
    var_dump($fruits); // print_r

    echo "<br>";
    // Get element by index
    echo $fruits[1].'<br>';

    echo "<br>";
    // Set element by index
    $fruits[0] = "Peach";
    var_dump(isset($fruits[2]));
    var_dump($fruits);

    echo "<br>";
    // Print the length of the array
    echo "Array length: " . count($fruits).'<br>';

    echo "<br>";
    // Add element at the end of the array
    $fruits[] = 'Banana';
    var_dump($fruits);

    echo "<br>";
    array_push($fruits, 'Foo');
    var_dump($fruits);

    echo "<br>";
    // Remove element from the end of the array
    array_pop($fruits);
    var_dump($fruits);

    echo "<br>";
    // Add element at the beginning of the array
    array_unshift($fruits, 'Apple');
    var_dump($fruits);

    echo "<br>";
    // Remove element from the beginning of the array
    array_shift($fruits);
    var_dump($fruits);

    echo "<br>";
    // Split the string into an array
    $string = "Banana,Apple,Peach";
    var_dump(explode(",", $string));

    echo "<br>";
    print_r($fruits);

    echo "<br><br>";
    // Combine array elements into string
    echo implode(",", $fruits).'<br>';

    echo "<br>";
    // Check if element exist in the array
    var_dump(in_array('Apple', $fruits));

    echo "<br>";
    // Search element index in the array
    var_dump(array_search("Peach", $fruits));

    echo "<br>";
    // Merge two arrays
    $vegetables = ['Potato', 'Cucumber'];
    var_dump(array_merge($fruits, $vegetables));
    var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4

    echo "<br>";
    // Sorting of array (Reverse order also)
    sort($fruits); //sort, rsort
    var_dump($fruits);
    echo "<br><br>";

    // Associative arrays
    // Create an associative array
    $person = [
        'name' => 'John',
        'surname' => 'Smith',
        'age' => 30,
        'hobbies' => ['Tennis', 'Video Games'],
    ];
    var_dump($person);

    echo "<br>";
    // Get element by key
    echo $person['name'].'<br>';

    echo "<br>";
    // Set element by key
    $person['channel'] = 'Media';
    var_dump($person);

    echo "<br>";
    //Null coalescing assignment operator. Since PHP 7.4
    if (!isset($person['address'])){
        $person['address'] = 'Unknown';
    }
    $person['address'] ??= 'Unknown';
    echo $person['address'].'<br>';

    echo "<br>";
    // Check if array has specific key
    var_dump(isset($person['location']));

    echo "<br>";
    // Print the keys of the array
    var_dump(array_keys($person));

    echo "<br>";
    // Print the values of the array
    var_dump(array_values($person));

    echo "<br>";
    // Sorting associative arrays by values, by keys
    ksort($person); // ksort, krsort, asort, arsort
    var_dump($person);

?>