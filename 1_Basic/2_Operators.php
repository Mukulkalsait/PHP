<?php


$num1 = 5;
$num2 = 12;
$num3 = 8;
$num4 = 20;

// NOTE: all + - * / % are all known
// echo $num1 + - * / %  $num2 ;
// IMP:  aslo
// $num2 ** $num3 is 12 to the power 8;

// B: we also know incriment and decriment operators
// $num1 ++
// $Num --
// $Num +=2
// $num -=3

// Y: PRE and POST (incriment/decriment)

// NOTE:  remember BODMAS
//
$total = 1 + 2 - 3 * 4 / 5 ** 6;
echo $total;

// G: sequece
// 1 = ()
// 2 = **
// 3 = *   /   %
// 4 = +   -
// IMP: in the above sequence if "MORE THAN ONE" same
// importance occurs at a point use LEFT -> to right.
//



// B: new string operators

$string  = "hello";
$string  .= "{ this is concadanated part of the main string  }";  // IMP: VVVIMP


echo " \n";
echo $string;

// G: with this method we can concade the string in the same VAR without adding new.
echo "\n \n";
$newline = "This ";
$newline .= "is ";
$newline .= "the ";
$newline .= "line ";
$newline .= "we ";
$newline .= "produced ";
$newline .= "with ";
$newline .= ".= ";
$newline .= "\{ dot operators }";


echo $newline;
