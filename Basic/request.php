<!DOCTYPE html>
<html>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_REQUEST['fname'];
        if(empty($name)){
            echo "<h3>Found of user data name</h3>";
        }else{
            echo "<h1>Your name is $name</h1>";
        }
    }

?>

</body>

</html>