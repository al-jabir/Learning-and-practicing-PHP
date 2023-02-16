<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    <h2>Registration Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required><br><br>

        <input type="submit" name="submit" value="Register">
    </form>

    <?php
		// Define variables and set to empty values
		$username = $email = $password = $confirm_password = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$username = test_input($_POST["username"]);
			$email = test_input($_POST["email"]);
			$password = test_input($_POST["password"]);
			$confirm_password = test_input($_POST["confirm_password"]);

			// Validate username
			if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
				echo "<p>Username can only contain letters and numbers</p>";
			}

			// Validate email
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<p>Invalid email format</p>";
			}

			// Validate password
			if (strlen($password) < 6) {
				echo "<p>Password must be at least 6 characters long</p>";
			}

			// Validate confirm password
			if ($password != $confirm_password) {
				echo "<p>Confirm password does not match</p>";
			}

			// If all input is valid, register user
			if (preg_match("/^[a-zA-Z0-9]*$/", $username) && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($password) >= 6 && $password == $confirm_password) {
				// TODO: add code to register user in database
				echo "<p>User registered successfully</p>";
			}
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
</body>

</html>