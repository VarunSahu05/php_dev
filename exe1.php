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

<?php // multiple php tags can be used in a file?>

<!-- Circle Calculation example -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>radius:</label><br>
        <input type="text" name="radius"><br>
        <input type="submit" value="Calculate"><br>
    </form><br>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = (4/3) * pi() * pow($radius, 3);
    $volume = round($volume, 2);


    echo "The circumference of the circle is {$circumference}.<br>";
    echo "The area of the circle is {$area}.<br>";
    echo "The volume of the sphere is {$volume}.<br>";
    echo "The radius is {$radius}.<br>";
?>