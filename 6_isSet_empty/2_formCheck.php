

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="color:white;">
  
    <form action="2_formCheck.php" method="post"> 
   <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
      <br>
      <input type="radio" name="cardselect" value="visa" placeholder="Visa">Visa<br>
      <input type="radio" name="cardselect" value="mastercard" placeholder="Mastercard">Mastercard<br>
      <input type="radio" name="cardselect" value="rupay" placeholder="RuPay">Rupay<br>
      <input type="radio" name="cardselect" value="notavialable" placeholder="No Card">No Card<br>
      <br>
      <div> 
     <input type="checkbox" name="pizza" value="Pizza">Pizza <br>
     <input type="checkbox" name="hamburgur" value="Hamburgur">Hamburgur <br>
     <input type="checkbox" name="hotdog" value="Hotdog">Hotdog <br>
     <input type="checkbox" name="taco" value="Taco">Taco <br>
      </div>
    <input type="submit" name="submit" value="submit"> 
    </form>
</body>
</html>


<?php

$username = $_POST["username"];
$password = $_POST["password"];
$cardselect = $_POST["cardselect"];

if (isset($_POST["submit"])) {

    //  IMP: for informations
    if (empty($username) || empty($password)) {
        echo"Both Username and Password are required. <br>";
    } else {
        echo"Welcome {$username}<br>";
        foreach ($_POST as $fields => $values) {
            echo "{$fields}=>{$values} <br>";
        }
    }

    if (isset($cardselect)) {
        echo "$cardselect is the card you selected <br>";
    } else {
        echo"Plese select the card";
    }


}

?>
