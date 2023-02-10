<?php
$name = "Mafia";

echo "<h3>My name is $name</h3>";

echo "<br/>";

echo 'Hey are you ' .$name; 

echo '<br/>';

// variable name rules

$name = 'King';

$my_name = 'John';

$My_Nick = 'Mafia';
$age_7 = '7';

echo  "My name is $name" . '<br />' ;
echo  "My name is $my_name" . '<br />' ;
echo  "My name is $My_Nick" . '<br />' ;
echo  "I am $age_7 years old" . '<br />' ;

// Object

class Phone{
    var $brand;
    function getModel($num){
        global $brand;
        $brand = $num;
        echo 'This is brand name ' . $brand . '.';
    }
}
$getResult = new Phone;

$getResult -> getModel('OnePlus 9 pro');

echo '<br />';

echo 'Today is ' .date('d,m,y');


?>