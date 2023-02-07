<?php
function myCode($a){
    return "<h1>This is a $a</h1>";
}

echo myCode('php programming');

echo "<br/>";

class Person {
    public $name;
    public $age;

    public function __construct($name, $age){
        $this -> name = $name;
        $this -> age = $age;
    }

    public function getDetails(){
        return "My name is " . $this -> name . " and I am " . $this -> age . " Years old.";
    }
}

$getResult = new Person("King",25);
echo $getResult -> getDetails();
echo "<br/>";

echo var_dump($getResult);
?>