<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form actions="index.php" method="POST">
        <input type="radio" name="credit_card" value ="Visa">Visa<br>
        <input type="radio" name="credit_card" value ="Mastercard">MasterCard<br>
        <input type="radio" name="credit_card" value ="American Express">American Express<br>
        <input type="submit" name="confirm" value="confirm"><br>
    </form>
</body>
</html>

<?php
    if (isset($_POST['confirm'])) {

        // if (isset($_POST['credit_card'])) {
        //     $credit_card = $_POST['credit_card'];
        //     echo "You have selected {$credit_card} as your credit card.";
        // } else {
        //     echo "Please select a credit card.";
        // }

        $credit_card = null;

        // if (isset($_POST['credit_card'])) {
        //     $credit_card = $_POST['credit_card'];
        // }
        // if ($credit_card == "Visa") {
        //     echo "You have selected Visa as your credit card.";
        // } elseif ($credit_card == "Mastercard") {
        //     echo "You have selected MasterCard as your credit card.";
        // } elseif ($credit_card == "American Express") {
        //     echo "You have selected American Express as your credit card.";
        // } else {
        //     echo "Please select a credit card.";
        // }

        switch($credit_card){
            case "Visa":
                echo "You have selected Visa as your credit card.";
                break;
            case "Mastercard":
                echo "You have selected MasterCard as your credit card.";
                break;
            case "American Express":
                echo "You have selected American Express as your credit card.";
                break;
            default:
                echo "Please select a credit card.";
        }
    }

?>