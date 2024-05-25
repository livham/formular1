<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Skydda mot HTML-injektioner
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        
        // Visa inskickade data
        echo "<h2>Submitted Data</h2>";
        echo "<p>Username: " . $username . "</p>";
        echo "<p>Password: " . $password . "</p>";
    } else {
        // Visa formuläret
        echo '<h2>Login Form</h2>
              <form action="" method="post">
                  <label for="username">Username:</label>
                  <input type="text" id="username" name="username" required>
                  <br>
                  <label for="password">Password:</label>
                  <input type="password" id="password" name="password" required>
                  <br>
                  <input type="submit" value="Submit">
              </form>';
    }
    ?>
</body>
</html>
