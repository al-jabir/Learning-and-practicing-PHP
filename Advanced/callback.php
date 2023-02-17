<?php
function myTest($item){
    return strlen($item);
}
// this is callbacks function
$arrItems = ["King","Mafia", "Ganstars","Killers"];
echo count($arrItems);
$resultItems = array_map("myTest",$arrItems);
print_r($resultItems);

?>