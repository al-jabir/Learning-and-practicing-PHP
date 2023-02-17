<?php
$str = ["king","mafia","DeathKillers"];
$length = array_map(function($item){return strlen($item);},$str);
print_r($length);
?>