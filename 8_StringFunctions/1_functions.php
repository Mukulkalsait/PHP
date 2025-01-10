<?php


$un = " |mukul_DK| ";
$ph_no = "91561-23645";

$unLower = strtolower($un);
$unUpper = strtoupper($un);
$unNospaces = trim($un);
$unPad = str_pad($un, 12, "-"); // make it 12char with addng "-" till 12th chare at right side.
$phNum = str_replace("-", "", $ph_no); // replace "-" with "" in $ph_no.
$unReverse = strrev($un);
$unShuffel = str_shuffle($un); // shuffel all char randamly.
$compair_strings = strcmp($unShuffel, $un); // will give  0/1
$count = strlen($un); // find length
$charPosition = strpos($un, "_"); // find "-" in string
$partOfString = substr($un, 0, 5); // create string strting from index 0 to 5.
$seperateString = explode(" ", $un); // this will seperate string with " "<spaces>, and create IMP: Array of it.

$array = ["Mukul", "Dhanraj", "Kalsait"];
$arrayToString = implode("-", $array); //this fun will create string of array and seperate them with "-".

// all in one array :

$arrayOfAll = [
  "\$un" => $un,
  "\$ph_no" => $ph_no,
  "\$unLower" => $unLower,
  "\$unUpper" => $unUpper,
  "\$unNospaces" => $unNospaces,
  "\$unPad" => $unPad,
  "\$phNum" => $phNum,
  "\$unReverse" => $unReverse,
  "\$unShuffel" => $unShuffel,
  "\$compair_strings" => $compair_strings,
  "\$count" => $count,
  "\$charPosition" => $charPosition,
  "\$partOfString" => $partOfString,
  "\$seperateString" => $seperateString,
  "\$arrayToString" => $arrayToString,
];


foreach ($arrayOfAll as $keys => $values) {
    echo "{$keys} => {$values}\n";

}
