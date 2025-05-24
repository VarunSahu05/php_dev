<?php

// hashing = transforming sesitive data (password) into letters, numbers, and symbols
// via a mathematical process. (similar to encryption)
// Hides the original data from 3rd parties.

$password = "mysecretpassword";

$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify("mysecretpassword", $hash)) {
    echo "Password is valid!<br>";
} else {
    echo "Invalid password.<br>";
}

echo $hash;

?>