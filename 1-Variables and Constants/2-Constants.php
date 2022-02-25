<?php

    //Sample 1
    define("LANGUAGE", "PHP");
    $lang = LANGUAGE;

    echo "$lang <br>";
    echo "LANGUAGE <br>";
    echo LANGUAGE . "<br>";

    //Sample 2
    define("LANG", "JAVA");
    echo LANG . "<br>";

    //Sample 3
    $LANGUAGE = "JAVA";
    echo $LANGUAGE . "<br>";
    echo LANGUAGE . "<br>";

    //Sample 4
    define("NAME", "");
    echo NAME . "<br>";

    //Access constants using the constant method
    echo constant('LANGUAGE');
?>