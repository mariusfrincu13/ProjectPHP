<?php

    $fileName = "content.txt";

    //Read
    //Method 1
    $content = file_get_contents($fileName);
    echo $content . "<br>";

    //Method 2
    //Open File
    $fileHandler = fopen($fileName, "r");
    $fileSize = filesize($fileName);

    //Read the file content
    $content = fread($fileHandler, $fileSize);
    echo $content . "<br>";

    //Close the file
    fclose($fileHandler);

    //Write
    //Method 1
    $fileHandler = fopen($fileName, "w") or die("Unable to Write the file");
    fwrite($fileHandler, "This is modified content");
    fclose($fileHandler);

    //Method 2
    $fileName1 = "file.txt";
    file_put_contents($fileName1, "This is modified");


?>