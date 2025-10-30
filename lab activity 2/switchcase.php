<?php
$day = 3;
switch ($day) {
    case 1: echo "Monday"; break;
    case 2: echo "Tuesday"; break;
    case 3: echo "Wednesday"; break;
    case 4: echo "Thursday"; break;
    case 5: echo "Friday"; break;
    default: echo "Weekend!";
}
?>
//code in else if else statements
<?php
$day = 3;

if ($day == 1) {
    echo "Monday";
} elseif ($day == 2) {
    echo "Tuesday";
} elseif ($day == 3) {
    echo "Wednesday";
} elseif ($day == 4) {
    echo "Thursday";
} elseif ($day == 5) {
    echo "Friday";
} else {
    echo "Weekend!";
}
?>
