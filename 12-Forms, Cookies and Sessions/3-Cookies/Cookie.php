<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie</title>
</head>
<body>
    <h1>Cookie</h1>
    <?php
        $cookie_name = "user";
        $cookie_value = "php";
        setcookie($cookie_name, $cookie_value, time() + (86400*30), "/");

        if (!isset($_COOKIE[$cookie_name])){
            echo "Welcome " . $cookie_value . ". Nice to meet you";
        }else{
            echo "Hey " . $cookie_value . ". Welcome back <br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>