<?php
    include("database.php");

    // inserting data into the database

    // $username = "admin";
    // $password = "admin123";

    // $hash_password = password_hash($password, PASSWORD_DEFAULT);

    // // $sql = "INSERT INTO users (user, password)
    // //         VALUES ('admin', 'admin123')";
    // $sql = "INSERT INTO users (user, password)
    //         VALUES ('$username', '$password')";

    // try{
    //     mysqli_query($conn, $sql);
    //     echo "User created successfully.";
    // }
    // catch(mysqli_sql_exception $e){
    //     echo "could not register user";
    // }

    // accessing data from the database

    // $sql = "SELECT * FROM users WHERE user = 'spongebob'";
    // $result = mysqli_query($conn, $sql);

    // if(mysqli_num_rows($result) > 0){
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo "User: " . $row["user"] . "<br>";
    //         echo "Password: " . $row["password"] . "<br>";
    //     }
    // } else {
    //     echo "No user found.";
    // }


    // mysqli_close($conn);

?>