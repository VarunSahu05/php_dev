<?php
// string functions - the string functions are used to manipulate strings in PHP

$username = "John Doe";
$user = array("John", "Doe");

//substring
$substring = substr($username, 0, 4);
echo "The substring is: $substring<br>";

// string length
$length = strlen($username);
echo "The length of the username is: $length<br>";

// string position
$position = strpos($username, "Doe");
if ($position !== false) {
    echo "The position of 'Doe' in the username is: $position<br>";
} else {
    echo "'Doe' not found in the username<br>";
}

// string replacement
$replaced = str_replace("John", "Jane", $username);
echo "The username after replacement is: $replaced<br>";

// string to lowercase
$lowercase = strtolower($username);
echo "The username in lowercase is: $lowercase<br>";

// string to uppercase
$uppercase = strtoupper($username);
echo "The username in uppercase is: $uppercase<br>";

// string trimming
$trimmed = trim("   $username   ");
echo "The username after trimming is: '$trimmed'<br>";

// string splitting
$split = explode(" ", $username);
echo "The username split into an array is: ";
print_r($split);
echo "<br>";

// string joining
$joined = implode("-", $split);
echo "The username joined with '-' is: $joined<br>";

// string exploding
$exploded = explode(" ", $username);
echo "The username exploded into an array is: ";

// string reversing
$reversed = strrev($username);
echo "The username reversed is: $reversed<br>";

// string concatenation
$concatenated = $username . " is a PHP developer.";
echo "The concatenated string is: $concatenated<br>";

// string comparison
$comparison = strcmp($username, "John Doe");
if ($comparison == 0) {
    echo "The usernames are equal<br>";
} elseif ($comparison < 0) {
    echo "The first username is less than the second username<br>";
} else {
    echo "The first username is greater than the second username<br>";
}

// string shuffling
$shuffled = str_shuffle($username);
echo "The shuffled username is: $shuffled<br>";

// string padding
$padded = str_pad($username, 20, "*", STR_PAD_BOTH);
echo "The padded username is: $padded<br>";

// string formatting
$formatted = sprintf("Hello, %s!", $username);
echo "The formatted string is: $formatted<br>";

// string searching
$search = "John";
$found = strstr($username, $search);
if ($found) {
    echo "'$search' found in the username: $found<br>";
} else {
    echo "'$search' not found in the username<br>";
}

foreach ($user as $name) {
    echo "$name<br>";
}

?>