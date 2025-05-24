<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>This is the home page</h3> <br>
    <form action="index.php" method="post">
        <input type="submit" value="logout" name="logout"><br>
    <!-- <a href ="index.php">This goes to login page</a> <br> -->
</body>
</html>


<?php

echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

if (isset($_POST['logout'])) {
    session_destroy(); // Destroy the session
    header("Location: index.php"); // Redirect to login page
}



?>