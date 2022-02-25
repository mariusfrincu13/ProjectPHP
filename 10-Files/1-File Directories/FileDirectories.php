<?php
    //Sample 1
    //List all files in a Directory
    //scandir
    $path = "Testfolder";
    $result = scandir($path);
    var_dump($result);

    foreach ($result as $dir){
        if ($dir != "." && $dir != ".."){
            echo $dir . "<br>";
        }
    }

    echo "<br>";
    //Remove . and ..
    $directory = array_diff($result,['.','..']);
    var_dump($directory);
    foreach ($directory as $dir){
        echo $dir . "<br>";
    }

    echo "<br>";
    //Sample 2 and 3
    //is_file or is_dir
    $result = scandir($path);
    $result = array_diff($result,['.','..']);
    foreach ($result as $dir){
        if (is_dir($path . "/" . $dir)){
            echo $dir . "<br>";
        }
    }

    //Create a Directory
    $result = glob("*.php");
    var_dump($result);

    if (!file_exists("Testfolder2")){
        mkdir("Testfolder2");
    }

    //Copy files
    copy("Testfolder/Filedirectories.php","Testfolder2/File.php");
?>