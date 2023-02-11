<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The result of Form</title>
    <style>
    body {
        text-align: center;
    }

    h1 {
        color: purple;
        font-style: italic;
        font-family: 'Courier New', Courier, monospace;

    }
    </style>
</head>

<body>
    <h1>Welcome <?php echo $_GET['name'];?></h1>
    <h3>Your email address is : <?php echo $_GET['email'] ?></h3>
</body>

</html>