<?php

    //List all files in a Directory
    //scandir
    $path = "Testfolder";
    $result = scandir($path);
    var_dump($result);

?>