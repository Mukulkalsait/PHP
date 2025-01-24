<?php


function sum1($a)
{
    $a += 5;
}




function sum2(&$a)
{
    $a += 5;
}


$value = 10;

sum1($value);
echo  $value ."\n" ;

sum2($value);
echo  "\n" .$value  ;
