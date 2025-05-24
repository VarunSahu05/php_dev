<?php
// session - a way to store information (in variables) to be used across multiple pages
//           5GB used to store information on a user to be used across multiple pages.
//           A user is assigned a unique session ID. e.g: login credentials
//           The session ID is stored in a cookie on the user's computer.

// session_start(); // Start the session
// $_SESSION["fav_food"] = "pizza"; // Set session variables
// $_SESSION["fav_drink"] = "water"; // Set session variables

session_start(); // Start the session

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Login Page</h3>
        <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username" placeholder="Enter Username"><br>
        password:<br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <input type="submit" value="login" name="login"><br>
</form>
    <!-- This is the login page <br>
    <a href ="home.php">This goes to home page</a> <br> -->
</body>
</html>


<?php


if (isset($_POST['login'])) {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];

        header("Location: home.php"); // Redirect to home page
    }
    else{
        echo "Missing username or password!<br>";
    }



}

// $_SESSION["username"] = "BroCode";
// $_SESSION["password"] = "password123";

// echo $_SESSION["username"] . "<br>";
// echo $_SESSION["password"] . "<br>";

?>
