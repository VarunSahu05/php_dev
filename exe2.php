<?php
//switch = replacement to using many elseif statements more
//         efficient, less code to write.

    $date = date("l");
    echo "{$date}<br>";

    $date = "Monday";

    switch ($date) {
        case "Monday":
            echo "Today is Monday.";
            break;
        case "Tuesday":
            echo "Today is Tuesday.";
            break;
        case "Wednesday":
            echo "Today is Wednesday.";
            break;
        case "Thursday":
            echo "Today is Thursday.";
            break;
        case "Friday":
            echo "Today is Friday.";
            break;
        case "Saturday":
            echo "Today is Saturday.";
            break;
        case "Sunday":
            echo "Today is Sunday.";
            break;
        default:
            echo "Not a valid day.";
    }

?>