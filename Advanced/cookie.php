<?php
$cookie_name = "user";
$cookie_value = "I am king of the mafia";
setcookie($cookie_name,$cookie_value, time()+(85400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checked Cookie</title>
</head>

<body>
    <?php
    if(!isset($_COOKIE["$cookie_name"])){
        echo "Cookie named '" . $cookie_name . "' is not set!";
    }else{
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
</body>

</html>