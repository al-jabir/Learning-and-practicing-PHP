<?php
$name = array('jonh','emmah','kally','Jack');
 $carLength = count($name);
echo 'total counr '.  count($name) .'<br/>';

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

// associative array

$age = array('Jonh' => '30','Jack' => '25',
'Emma' => '20','Umme' => '18');

foreach($age as $n => $val){
    echo "<h3> $n is $val years old.</h3> <br/>";
}

// mutlidimensional array

$myCar = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
);

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$myCar[$row][$col]."</li>";
    }
    
  }
?>