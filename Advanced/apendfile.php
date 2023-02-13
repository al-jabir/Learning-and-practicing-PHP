<?php
$myFile = fopen("king.txt","a") or die ("Could not open");
$txt = "When I be career of my job?\n";
fwrite($myFile,$txt);
fclose($myFile);
?>