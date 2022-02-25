<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO</title>
</head>
<body>
<h1>PDO - Display Records</h1>
<?php

$dns = "mysql:host=localhost;dbname=php_coursedb";
$username = "root";
$password = "";

try{

    $db = new PDO($dns, $username, $password);
    $query = "SELECT * FROM student";
    $statement = $db->prepare($query);
    $statement->execute();

    while($student = $statement->fetch()){
        echo "ID: " . $student['ID'] . "<br>";
        echo "NAME: " . $student['NAME'] . "<br>";
    }

    $statement->closeCursor();

}catch(Exception $e){
    $error_message = $e->getMessage();
    echo "<p>Error message: $error_message</p>";
}

?>
</body>
</html>