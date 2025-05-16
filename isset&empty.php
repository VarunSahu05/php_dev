<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in"><br>
</body>
</html>


<?php
    //isset() = Returns True if a variable is declared and is not NULL
    //empty() = Returns True if a variable is not declared or is NULL or FALSE or ""

    // $username = "BroCode";
    // $user = null;

    // if (isset($username)) {
    //     echo "The variable is set.<br>";
    // } else {
    //     echo "The variable is not set.<br>";
    // }

    // if (empty($user)) {
    //     echo "The variable is empty.";
    // } else {
    //     echo "The variable is not empty.";
    // }

    foreach($_POST as $key => $value) {
        echo "{$key} = {$value}<br>";
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) && empty($password)) {
            echo "Username and password are required.";
        }
        else if (empty($username)) {
            echo "Username is required.";
        } elseif (empty($password)) {
            echo "Password is required.";
        } else {
            echo "Welcome, {$username}!";
        }
    }

?>