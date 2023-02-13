<?php
$myFile = fopen("king.txt","w") or die ("Could not open");
$txt = "How to I became of mafia\n";
fwrite($myFile,$txt);
$txt = "I will be kingdom of mafia\n";
fwrite($myFile,$txt);
fclose($myFile);
?>