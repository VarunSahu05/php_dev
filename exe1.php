<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>quantity:</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="Log in"><br>
</body>
</html>
<?php
    $item = "pizza";
    $price = 4.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $price * $quantity;

    echo "You have ordered {$quantity} x {$item}(s) at a price of {$price} each. <br>";
    echo "The total cost is {$total}. <br>";
?>