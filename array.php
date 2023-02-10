<?php
$name = array('jonh','emmah','kally','Jack');
 $carLength = count($name);
echo count($name) .'<br/>';

for($x = 0; $x < $carLength; $x++){
     echo $name[$x] .'<br/>';
}

$arrNum = array(3,5,6,7,32,11,55);
$numLength = count($arrNum);

$sum = 0;

for($x = 0; $x < $numLength; $x++){
    $sum+=$arrNum[$x];
}

echo $sum .'<br/>';

?>