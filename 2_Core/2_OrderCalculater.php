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
        <option value=""></option>
        <option value="pizza">pizza</option>
        <option value="pasta">pasta</option>
        <option value="sandwitch">sandwitch</option>
        <option value="HotDog">HotDog</option>
        <option value="burger">burger</option>
      </select>
    <input type="number" name="amount" placeholder="Inter amount" id="amount">
    <input type="submit" name="submit" placeholder="submit">
    
    </form>
  
    <script src="2_app.js"></script>
</body>
</html>


<?php

$food = $_POST["food"];
$num_of_plates = $_POST["amount"];
$total = null;


$foodArray = [
  "pizza" => 199,
  "pasta" => 120,
  "sandwitch" => 99,
  "HotDog" => 59,
  "burger" => 79,
];

if (isset($_POST["submit"])) {
    if (empty($food) || empty($num_of_plates)) { // IMP: here if (a || b) even one of them is eampty then if= true ∴ not working
        echo"<p style=\"color: red;\"> Option and number of Plates are menditory !!!</p>";
    } else {
        $cost = $foodArray["{$food}"];
        $total = $cost * $num_of_plates;
        echo"<p style=\"color: white;\">Cost of One {$food} is = {$cost}.</p>";
        echo"∴ Your Total for {$num_of_plates} plates fo {$food} is =<span style=\"color: green;\"> {$total} </rpan>";
    }
    // debhging
    // echo"<br>{$food}<br> <br>{$num_of_plates}";
    // $food = null;
    // $num_of_plates = null;
}


// G2: older way ---
//  -
// if ($food == "pizza") {
//     $total = $num_of_plates * 199;
// } elseif ($food == "pasta") {
//     $total = $num_of_plates * 120;
// } elseif ($food == "sandwitch") {
//     $total = $num_of_plates * 99;
// } elseif ($food == "HotDog") {
//     $total = $num_of_plates * 59;
// } else {
//     $total = $num_of_plates * 79;
// }
// echo "You have selected {$val} {$food} hence your total is {$total}.";
//
