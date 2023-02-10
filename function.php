<?php
// learning functions
function yourName($name){
    return $name;
}

$resultName = yourName('<h1>My name is Mafia</h1>');
echo $resultName;

echo '<br />';

function addNum($x, $y){
    return $x + $y;
}
function mulNum($x, $y){
    return $x * $y;
}function minNum($x, $y){
    return $x - $y;
}
echo 'The result is :' .addNum(5,9) . '<br />';
echo 'The result is :' .mulNum(5,9) . '<br />';
echo 'The result is :' .minNum(5,9) . '<br />';
?>