<!DOCTYPE html>
<html>

<head>
    <title>JSON Project</title>
</head>

<body>
    <h1>Employees</h1>

    <?php
    // Read the JSON file
    $data = file_get_contents('./data.json');

    // Convert JSON data to a PHP array
    $employees = json_decode($data, true);

    // Loop through the array and display employee names
    foreach ($employees['employees'] as $employee) {
      echo '<p>' . $employee['firstName'] . ' ' . $employee['lastName'] . '</p>';
    }
  ?>
</body>

</html>