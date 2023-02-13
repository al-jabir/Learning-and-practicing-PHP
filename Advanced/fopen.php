<?php
$myFile = fopen("dev.txt","r") or die ("Could not open");
echo fread($myFile,filesize("dev.txt"));
fclose($myFile);
?>