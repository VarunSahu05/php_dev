<?php
//conditional statements
    // if, else if, else
    // switch
    // if statement
    // if (condition) {
    //     // code to be executed if condition is true
    // }
    // else {
    //     // code to be executed if condition is false
    // }
// switch statement
    // switch (variable) {
    //     case value1:
    //         // code to be executed if variable equals value1
    //         break;
    //     case value2:
    //         // code to be executed if variable equals value2
    //         break;
    //     default:
    //         // code to be executed if variable doesn't match any case
    // }
//logical operators
    // and (&&)
    // or (||)
    // not (!)

    $date = date("l"); // Get the current day of the week
    echo "{$date}<br>";

    $age = 20;

    if ($age >= 18) {
        echo "You are an adult.<br>";
    } else if ($age >= 13 && $age < 18) {
        echo "You are a teen.<br>";
    }
    else if ($age < 0) {
        echo "Not a valid age.<br>";
    }
    else{
        echo "You are a child.<br>";
    }


    $adult =  true;
    if ($adult == true){
        echo "You may enter this site <br>";
    }
    else{
        echo "You may not enter this site <br>";
    }

    $hours = 40;
    $rate = 15;
    $weekly_pay = null;

    if ($hours > 40) {
        $weekly_pay = ($hours - 40) * ($rate * 1.5) + (40 * $rate);
    } else {
        $weekly_pay = $hours * $rate;
    }
    echo "You made \${$weekly_pay} this week.<br>";

    $temp = 25;
    switch ($temp) {
        case $temp < 0:
            echo "It's freezing outside!<br>";
            break;
        case $temp >= 0 && $temp <= 20:
            echo "It's a bit chilly outside.<br>";
            break;
        case $temp > 20 && $temp <= 30:
            echo "It's a nice day outside.<br>";
            break;
        default:
            echo "It's hot outside!<br>";
    }

    $child = false;
    $senior = false;
    $ticket = null;

    if ($child || $senior) {
        $ticket = "You get a discount ticket!";
    } else {
        $ticket = "You get a regular ticket!";
    }
    echo "$ticket<br>";


?>