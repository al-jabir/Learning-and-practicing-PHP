<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var(htmlspecialchars($str));
echo $newstr;
?>