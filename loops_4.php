<?php
    // for loop = repeat some code a specific number of times
    // while loop = repeat some code while a condition is true
    // do while loop = repeat some code while a condition is true, but run the code at least once
    // foreach loop = repeat some code for each element in an array

    for ($i = 0; $i < 10; $i++) {
        echo "The number is: $i<br>";
    }

    $counter = 0;
    while($counter <= 10){
        echo "The number is: $counter<br>";
        $counter++;
    }

    do {
        echo "The number is: $counter<br>";
        $counter++;
    } while($counter <= 10);

    $array = array("apple", "banana", "orange");
    foreach ($array as $value) {
        echo "The value is: $value<br>";
    }

?>