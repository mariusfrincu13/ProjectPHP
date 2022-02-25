<?php

    $fileName = "MyFolder.txt";

    if (file_exists($fileName)){
        echo "File exists <br>";

        if (is_dir($fileName)){
            die("It is a Directory not File");
        }

        copy($fileName, "CopyFile.txt");
        copy("CopyFile.txt", "CopyFile1.txt");

        rename("CopyFile1.txt", "RenamedFile.txt");
        copy("RenamedFile.txt", "RenamedFileDeleted.txt");

        unlink("RenamedFileDeleted.txt");
    }else{
        echo "File / Directory does not exists <br>";
        die("No such Files");
    }
?>