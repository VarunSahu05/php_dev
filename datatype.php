
<?php
    // Data Types : String, Integer, Boolean, Float, Null
    // String: A sequence of characters, used to represent text.
    // Integer: A whole number, can be positive or negative.
    // Boolean: A binary value, either true or false.
    // Float: A number with decimal points, used for precise values.
    // Null: A special data type that represents a variable with no value.
    // PHP is a loosely typed language, meaning you don't have to declare the data type of a variable when you create it.
    // PHP variables start with a dollar sign ($) followed by the variable name.
    // Variable names can contain letters, numbers, and underscores, but cannot start with a number.
    // Variable names are case-sensitive, meaning $name and $Name are different variables.
    // PHP variables can be assigned values using the assignment operator (=).
    // PHP variables can be used to store different types of data, including strings, integers, booleans, floats, and null values.

    $name = "John Doe <br>"; // String datatype
    $email ="fake@gmail.com ";

    $age = 30; // Integer datatype
    $isStudent = true; // Boolean datatype
    $height = 5.9; // Float datatype

    $price = 4.99;

    $quantity = 4;
    $food = "pizza";
    $total = null;

    echo $name;
    echo "Hello {$name}";
    echo "Your email is {$email} <br><br>";
    echo "You are {$age} years old <br>";
    echo "Your height is {$height} <br><br>";
    echo "You are a student: {$isStudent} <br>";
    echo "The price is \${$price} <br>";
    // PHP got confused with thhe $-symbol, so we have to mention a escape character/sequence.

    echo "<br>You have oredered {$quantity} x {$food} <br>";
    $total = $quantity * $price;
    echo "Your total is \${$total} <br>";

?>