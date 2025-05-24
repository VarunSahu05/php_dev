<?php

// cookie = Information about a user stored in a user's browser
// targeted advertising, user tracking, and session management, browsing preferences and other non-sensitive data;

// setcookie ("fav_food", "pizza", time() + (86400 * 2), "/"); // 86400 = 1 day
//setcookie ("key", "value", time() + (86400 * 30), "/"); // 86400 = 1 day
//key = name of the cookie
//value = value of the cookie
//time() = current time
//time() + (86400 * 30) = cookie will expire in 30 days
//"/" = cookie will be available within the entire domain

setcookie ("fav_food", "pizza", time() + (86400 * 2), "/"); // 86400 = 1 day
setcookie ("fav_drink", "water", time() + (86400 * 2), "/");
//setcookie ("fav_color", "blue", time() - 0, "/"); -- this cookie is not set

foreach ($_COOKIE as $key => $value) {
    echo "Cookie name: " . $key . "<br>";
    echo "Cookie value: " . $value . "<br>";
    echo "<hr>";
}

if (isset($_COOKIE["fav_food"])) {
    echo "Your favorite food is: " . $_COOKIE["fav_food"] . "<br>";
} else {
    echo "Cookie 'fav_food' is not set!<br>";
}




?>