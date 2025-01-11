<?php



// NOTE: strings
$username = "mukul";
$food = "pizza ";
$email = "mdkalsait555@gmail.com";

// NOTE: Int
$age = 28;
$users = 4;
$quantity = 9;

// NOTE: float
$gpa = 9.3;
$tax = 12.3;
$price = 19.99;

// NOTE: bollean
$employed = true;
$online = true;
$for_sale = false;

// NOTE:  null
$total_Price = null;

echo "Hello {$username} do you reallyl like {$food} \n";
echo "Your age is = {$age} & Your gpa is {$gpa} \n";
$total_Price = $quantity * $price;
echo "You have ordered {$quantity} {$food} hence your Total is ₹{$total_Price} \n";
echo "But as per our information {$username} is our VVVIP Guiest hence you are allowed to get anything for free for lifetime.";
