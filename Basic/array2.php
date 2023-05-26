<?php

$user = [
    [ 
        'name' => 'John Smith',
        'age' => 21,
        'email' => 'johnceo@gmail.com',
        'Job' => 'Frontend Developer'
    ],
    [
        'name' => 'Jack Smith',
        'age' => 19,
        'email' => 'jackict@gmail.com',
        'Job' => 'Backend Developer'
    ]
    ];

foreach ($user as $person){
    echo "<h3>" .$person['name'] ."</h3>";
    echo "<h5>" .$person['email'] ."</h5>";
    echo "<h2>" .$person['Job'] ."</h2>";
}

?>