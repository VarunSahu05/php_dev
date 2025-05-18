<?php
//funciton - write some code once, reuse it many times.
//type () after function name to invoke ex. add() subtract() multiply() divide()

function happy_birthday(){
    echo "Happy Birthday to you!<br>";
    echo "Happy Birthday to you!<br>";
    echo "Happy Birthday dear friend!<br>";
    echo "Happy Birthday to you!<br><br>";
}
function add($a, $b) {
    return $a + $b;
}
function subtract($a, $b) {
    return $a - $b;
}
function multiply($a, $b) {
    return $a * $b;
}
function divide($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero.";
    }
    return $a / $b;
}
happy_birthday();
echo add(5, 3) . "<br>"; // Output: 8
echo subtract(10, 4) . "<br>"; // Output: 6
echo multiply(2, 3) . "<br>"; // Output: 6
echo divide(10, 2) . "<br>"; // Output: 5
echo divide(10, 0) . "<br><br>"; // Output: Error: Division by zero.


// Function to calculate the factorial of a number
function factorial($n) {
    if ($n < 0) {
        return "Error: Factorial of a negative number is not defined.";
    }
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}
echo factorial(5) . "<br>"; // Output: 120


function hypotenuse($a, $b) {
    return sqrt($a ** 2 + $b ** 2);
}
echo hypotenuse(3, 4) . "<br>"; // Output: 5


// Function to check if a number is prime
function is_prime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

echo is_prime(7) ? "7 is a prime number.<br><br>" : "7 is not a prime number.<br><br>"; // Output: 7 is a prime number.


// Function to reverse a string
function reverse_string($str) {
    return strrev($str);
}
echo reverse_string("Hello World!") . "<br>"; // Output: !dlroW olleH
// Function to check if a string is a palindrome


function is_palindrome($str) {
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str)); // Remove non-alphanumeric characters and convert to lowercase
    return $str == strrev($str);
}
echo is_palindrome("ABCBA") ? "ABCBA is a palindrome.<br>" : "ABCBA is not a palindrome.<br>"; // Output: ABCBA is a palindrome.




?>