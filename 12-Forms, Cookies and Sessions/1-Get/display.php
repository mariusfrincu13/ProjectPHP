<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>
<body>
    <h1>Form - GET</h1>
    <a href="StudentForm.html">Back</a>

<?php
    echo "<br>";
    $name = $_GET['text'];
    $email = $_GET['email'];

    echo "Name = $name <br>";
    echo "Email = $email <br>";

?>
</body>
</html>