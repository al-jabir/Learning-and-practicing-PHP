<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $books = [
        "Front end developer",
        "Backend developer",
        "Cloud developer",
        "DevOps developer",
        "AI developer",
        "Mern Stack developer",
        "Full stack developer"
    ];
    ?>
    <ul type="circle">
        <?php
        foreach($books as $book) : ?>

        <li><?php echo "<h3>$book</h3>" ?></li>

        <?php endforeach; ?>

    </ul>
</body>

</html>