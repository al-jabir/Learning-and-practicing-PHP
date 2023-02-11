<?php
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}
 
addition();
echo 'The result of '. $z . '<br/>';

echo $_SERVER['HTTP_HOST'] .'<br/>';
echo $_SERVER['SERVER_NAME'] ;

echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
// echo $_SERVER['SCRIPT_URI'];



?>