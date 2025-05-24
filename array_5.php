<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label >Enter a country</label><br>
        <input type="text" name="country"><br>
        <input type="submit"><br>
</body>
</html>
<?php
    $array = array("apple", "banana", "orange");

    foreach ($array as $value) {
        //echo "The value is: $value<br>";
    }

    //$array[0] = "pineapple";
    array_push($array, "grape"); // add to the end
    array_unshift($array, "kiwi"); // add to the beginning
    array_pop($array); // remove last element
    array_shift($array); // remove first element
    $array = array_reverse($array); // reverse the array
    //echo count($array); // count the number of elements


    $array = array_slice($array, 1, 2); // get a slice of the array
    $array = array_splice($array, 1, 2); // remove a slice of the array
    $array = array_merge($array, array("pear", "peach")); // merge two arrays
    $array = array_unique($array); // remove duplicates
    $array = array_map("strtoupper", $array); // apply a function to each element



    $array = array_filter($array, function($value) {
        return $value != "BANANA";
    }); // filter the array
    $array = array_reduce($array, function($carry, $item) {
        return $carry . " " . $item;
    }, ""); // reduce the array to a single value



    // associative array : its a key-value pair
    $associativeArray = array(
        "name" => "John",
        "age" => 30,
        "city" => "New York",
        "country" => "USA",
        "USA" => "Washington",
        "Canada" => "Ottawa",
        'India' => "nNewDelhi",
    );

    $associativeArray["name"] = "Jane"; // change the value of a key

    // echo "{$associativeArray["name"]}<br>";
    // access the value by key
    foreach ($associativeArray as $key => $value) {
        echo "The key is: $key and the value is: $value<br>";
    }


    $array = array_flip($associativeArray); // flip keys and values
    $keys = array_keys($associativeArray); // get the keys of the array
    $values = array_values($associativeArray); // get the values of the array

    $capital = $associativeArray[$_POST['country']];
    echo "<br>The capital is {$capital}";

?>