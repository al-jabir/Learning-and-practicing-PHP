<?php
// while loop

$s = 1;
while($s<= 5){
    echo 'will be learn code ' .$s . '<br/>';
    $s++;
}

// while sum to 10;

$a = 0;
while($a <= 100){
    echo ' will be result of ' .$a . '<br/>';
    $a+=10;
}

// do whhile loop
$as = 1;
do{
   echo 'This number is ' .$as . '<br/>';
   $as++;
}while($as <= 9);

// for loop


for ($i = 0; $i <= 100; $i++){
    echo 'I love coding for self thought ' .$i . '<br/>';
    
}

$totalSum = 0;

for($j = 1; $j <= 50; $j++){
    $totalSum+= $j;
}

echo 'Total sum  of ' .$totalSum;
 
echo '<br/>';
// foreach loop 

$car = array('audi','toyota','bmw','honda');
foreach($car as $showCar){
    echo 'my car list of ' . $showCar . '<br/>';
}

// break the loop


for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

// continue loop

for ($x = 0; $x < 10; $x++) {
  if ($x == 4 ||$x == 7) {
    continue;
  }
  echo "continue $x <br>";
}

$ja = 0;

while($ja <= 9){
   if($ja == 5){
    break;
   }
   echo 'count list of ' . $ja . '<br/>';
   $ja++;
}

?>