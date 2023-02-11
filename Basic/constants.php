<?php
define('greet','How to I became web developer?');
echo greet;

echo '<br/>';

define('phoneBrand',['Nokia', 'Google','OnePlus','Samsung','Realme','Huawei','iPhone']);
echo phoneBrand[2] . '<br/>';
echo phoneBrand[3] . '<br/>';

define('name','My name is Abdullah.');

function testName(){
    echo name;
}
testName();
?>