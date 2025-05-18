<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>

<?php

if (isset($_POST['login'])) {
    //$username = $_POST['username']; --> not directly assigning to the $username

    //$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


    //echo "Hello {$username}!<br>";
    echo "You are {$age} years old!<br>";
    echo "Your email is {$email}!<br>";
}



?>