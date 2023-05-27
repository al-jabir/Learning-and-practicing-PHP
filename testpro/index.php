<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test project of php</title>
    <style>
    body {
        background-color: silver;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100vh;
        width: 95%;
        font-family: cursive;
        font-style: italic;
        font-weight: 700;
        margin: 0 auto;
        text-align: center;
    }
    </style>
</head>

<body>
    <h1>Learning something project of php</h1>
    <?php
    $data = [
        [
            'name' => 'John Smith',
            'job' => 'Frontend Developer',
            'salary' => '70K'
        ],
        [
            'name' => 'Jack Smith',
            'job' => 'Backend Developer',
            'salary' => '110K'
        ],
        [
            'name' => 'Kane Smith',
            'job' => 'FullStack Developer',
            'salary' => '95K'
        ]
    ];

    foreach ($data as $user) {
        echo '<h3>My name is ' .$user['name'] .'</h3>';
        echo '<h5>I am ' . $user['job'] .'</h5>';
        echo '<b>My salary is monthly ' .$user['salary'].' TK.</b>';
        echo '<br>';
    }
    ?>
</body>

</html>