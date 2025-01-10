<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
</head>
<body>


    <form action="1_inputFilters.php" method="POST">  
     <input type="text" name="uname" placeholder="User Name" value="">
     <input type="password" name="password" placeholder="Password" value="">
     <input type="number" name="age" placeholder="Age" value="">
     <input type="email" name="email" placeholder="email" value="">
     <input type="text" name="submit" placeholder="" value="submit">
    </form>
  
</body>
</html>



<?php

if (isset($_POST["submit"])) {
    //DX: usually this is used.
    // $uname = $_POST["uname"];
    // $pword = $_POST["password"];
    // $age = $_POST["age"];
    // $email = $_POST["email"];

    //B: but now we will use :

    $uname = filter_input(INPUT_POST, "uname", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    echo $uname .\n .$age. \n .$email;





}


//IMP: Multyple flagings:
$ip = '192.168.1.1';

if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_IPV4)) {
    echo "Valid public IPv4 address.";
} else {
    echo "Invalid or private IP address.";
}

$array = [
 "{$_POST['uname']}",
 "{$_POST['password']}",
 "{$_POST['age']}",
 "{$_POST['email']}",
];


foreach ($array as $inputs) {
    echo "{$inputs} ";

}
