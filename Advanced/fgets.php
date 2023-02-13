<?php
$myFile = fopen("dev.txt","r") or die ("Could not open");
echo fgets($myFile);
fclose($myFile);
?>