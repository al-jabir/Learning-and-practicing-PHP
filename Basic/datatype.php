<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mathod of php</title>
</head>

<body>
    <?php
    $x = 'king <br/>';
    $a = 22;
    $b = 19.98;
    $t = true;
    $f = false;
    $car = array('<br/> Audi', 'Toyota', 'R15');
    var_dump($x);
    var_dump($a);
    var_dump($b);
    var_dump($t);
    var_dump($f);
    var_dump($car[0]);
    var_dump($car);
    echo "<br/>";

    class Person
    {
        public $name;
        public $email;
        public $phone;
        public $job;
        public $location;

        public function __construct($name, $job)
        {
            $this->name = $name;
            $this->job = $job;
        }

        public function getDetails()
        {
            return "My name is " . $this->name . "<br/> I am " . $this->job . "Developer";
        }
    }

    $getResult = new Person("James ", "Frontend ");
    echo $getResult->getDetails();
    echo "<br>";

    echo var_dump($getResult)
    ?>
</body>

</html>