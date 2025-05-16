<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <!-- <input type="checkbox" name="foods[]" value ="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value ="Burger">Burger<br>
        <input type="checkbox" name="foods[]" value ="Fries">Fries<br> -->
        <input type="checkbox" name="pizza" value ="Pizza">Pizza<br>
        <input type="checkbox" name="burger" value ="Burger">Burger<br>
        <input type="checkbox" name="fries" value ="Fries">Fries<br>
        <input type="submit" name="submit"><br>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {

        // if (isset($_POST['pizza'])) {
        //     echo "You have selected Pizza.<br>";
        // }
        // if (isset($_POST['burger'])) {
        //     echo "You have selected Burger.<br>";
        // }
        // if (isset($_POST['fries'])) {
        //     echo "You have selected Fries.<br>";
        // }
        // if (empty($_POST['pizza'])) {
        //     echo "You don't like Pizza.<br>";
        // }
        // if (empty($_POST['burger'])) {
        //     echo "You don't like Burger.<br>";
        // }
        // if (empty($_POST['fries'])) {
        //     echo "You don't like Fries.<br>";
        // }
        // if (empty($_POST['burger']) && empty($_POST['pizza']) && empty($_POST['fries'])) {
        //     echo "You don't like any food.<br>";
        // }



        $food = array();
        if (isset($_POST['pizza'])) {
            $food[] = $_POST['pizza'];
        }
        if (isset($_POST['burger'])) {
            $food[] = $_POST['burger'];
        }
        if (isset($_POST['fries'])) {
            $food[] = $_POST['fries'];
        }

        if (empty($food)) {
            echo "Please select at least one food item.";
        } else {
            echo "You have selected: " . implode(", ", $food);
            //implode() = Joins array elements with a string
            //implode(",", $food) = Joins array elements with a comma
        }


        // $foods = $_POST["foods"];

        // foreach($foods as $food) {
        //     echo "You have selected {$food}.<br>";
        // }
    }
?>