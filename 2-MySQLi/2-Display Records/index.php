<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySQLi</title>
</head>
<body>
<h1>MySQLi - Display Records</h1>
<?php
$hostname = "localhost";
$dbname = "php_coursedb";
$username = "root";
$password = "";

try{

    $db = new mysqli($hostname,$username,$password,$dbname);
    $query = "SELECT * FROM student";

    $result = $db->query($query);

    while($student = $result->fetch_assoc()){
        echo "ID: " . $student['ID'] . "<br>";
        echo "NAME: " . $student['NAME'] . "<br>";
    }

    $db->close();

}catch(Exception $e){
    $error_message = $e->getMessage();
    echo "<p>Error message: $error_message</p>";
}

?>
</body>
</html>