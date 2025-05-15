<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a number to count to:</label><br>
        <input type="text" name="counter"><br>
        <input type="submit" name="start" value="start"><br>
        <input type="submit" name="start" value="stop"><br>
</body>
</html>
<?php
    $counter = $_POST["counter"];
    for($i = 0; $i <= $counter; $i++) {
        echo "The number is: $i<br>";
    }

    $seconds = 0;
    $running = true;

    //isset function checks if a variable is set and is not NULL

    while($running) {
        if (isset($_POST["stop"])) {
            $running = false;
        } else {
            //wait 1 second
            $seconds++;
            sleep(1);
            echo $seconds . "<br>";
        }
        // the system glitches
    }


?>