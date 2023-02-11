<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number of php</title>
</head>

<body>
    <?php
    $x = 'king';
    $a = 20;
    $s = 19.98;
    $t = true;
    echo var_dump(is_string($x));
    echo "<br/>";
    echo var_dump(is_string($a));
    echo "<br/>";
    echo var_dump(is_numeric($a));
    echo "<br/>";
    echo var_dump(is_int($a));
    echo "<br/>";
    echo var_dump(is_int($s));
    echo "<br/>";
    echo var_dump(is_float($a));
    echo "<br/>";
    echo var_dump(is_float($s));
    echo "<br/>";
    echo var_dump(is_bool($t));

    echo "<br/>";
    $s_cast = (int)$s;
    echo $s_cast;

    echo "<br/>";

    echo min(3,5,6,8,19,22);
    echo max(3,5,6,8,19,22);

    echo '<br/>';

    $a = 44;
    $s = '34';
    $fl = 33.98;
    $str = 'mafia';

    echo var_dump(is_numeric($a)) . '<br/>';
    echo var_dump(is_numeric($s)) . '<br/>';
    echo var_dump(is_numeric($fl)) . '<br/>';
    echo var_dump(is_numeric($str)) . '<br/>';
    echo (int)$s;
    ?>
</body>

</html>