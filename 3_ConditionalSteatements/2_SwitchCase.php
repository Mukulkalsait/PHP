<?php


$grade = "x";

switch ($grade) {
    case "A": echo "Wow, You are the best !";
        break;
    case "B": echo "Awesome, you are under top 10";
        break;
    case "C": echo "Nice, You did Great ";
        break;
    case "D": echo "thats ok but do better next time";
        break;
    case "E": echo "You need to study hard, but dont loose the hope";
        break;
    case "F": echo "Seriously what are you even doing, extra classes from today.";
        break;
    default: echo "{$grade} is not valid grade, Please Select appropiate grade (A,B,C,D,E,F,G)";
}

echo "\n";
$date = date("l");
echo "{$date}= we can use switch case in the basis of date function";
