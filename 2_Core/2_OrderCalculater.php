<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Calculator</title>
</head>
<body style="color: white;">

    <form action="2_OrderCalculater.php" method="post"> 
      <select name="food" id="">
      
        <option value="pizza">pizza</option>
        <option value="pasta">pasta</option>
        <option value="sandwitch">sandwitch</option>
        <option value="HotDog">HotDog</option>
        <option value="burger">burger</option>
      </select>
    <input type="number" name="amount" placeholder="Inter amount">
    <input type="submit" name="submit" placeholder="submit">
    
    </form>
  
</body>
</html>


<?php

$food = $_POST["food"];
$val = $_POST["amount"];
$total = null;

if ($food == "pizza") {
    $total = $val * 199;

} elseif ($food == "pasta") {
    $total = $val * 120;
} elseif ($food == "sandwitch") {
    $total = $val * 99;
} elseif ($food == "HotDog") {
    $total = $val * 59;
} else {
    $total = $val * 79;
}

echo "You have selected {$val} {$food} hence your total is {$total}.";
