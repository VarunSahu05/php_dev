<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br>
        <label>y:</label>
        <input type="text" name="y"><br>
        <input type="submit" value="total"><br>
</body>
</html>
<?php

    $x = $_POST["x"];
    $y = $_POST["y"];

    $total = null;
    $t1 = null;
    $t2 = null;
    $t3 = null;
    $t4 = null;
    $t5 = null;
    $t9 = null;

    $total = abs($x);
    $t1 = round($x);
    $t2 = ceil($x);
    $t3 = floor($x);
    $t4 = sqrt($x);
    $t5 = pow($x, $y);  // x^y
    $t6 = log($x);
    $t7 = log10($x);
    $t8 = log($x, 2);
    $t9 = exp($x);      // e^x
    $t10 = min($x, $y);
    $t11 = max($x, $y);
    $t12 = rand($x, $y); // random number between x and y
    $t13 = sin($x);
    $t14 = cos($x);
    $t15 = tan($x);
    $t16 = asin($x);
    $t19 = sinh($x);


    echo "{$total}<br>";
    echo "{$t1}<br>";
    echo "{$t2}<br>";
    echo "{$t3}<br>";
    echo "{$t4}<br>";
    echo "{$t5}<br>";
    echo "{$t9}<br>";
?>