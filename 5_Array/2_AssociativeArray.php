<?php


$capitals = array(
  "India" => "Delhi",
  "USA" => "Washington D.C",
  "Chaina" => "Beging",
  "Japan" => "Tokio",
  "Britan" => "London"
   );

$names = [
  "mukul" => "kalsait",
  "akhilesh" => "site",
  "kaiwalya" => "kalsait",
  "shruti" => "girde",
  "yougeshwari" => "bhanuse",
];

echo $capitals["India"] . "\n";

//-IMP:--------------------------------------------
// B: this will change the exiting pair.
$capitals["USA"] = "Los Vegas (changed in program)";
// G: Same will add the new pari.
$capitals["South Korea"] = "Seoul";
//-IMP:--------------------------------------------


//TAG:  will work similar ...
//array_push()
//array_pop()
//array_shift()
//array_reverse()
array_push($capitals, ("Nagpur ,Narsada"));

//B: this will create an array with just KEYS. or we can definetly use only $country in for each loop.
$countries = array_keys($capitals);
echo"\n\nThe starting of for-each loop for \$countries:\n\n";
foreach ($countries as $country) {
    echo $country ."\n";
}

//B: this will create an array with just VALUES or we can definetly use only $capital in for each loop.
$capitals1 = array_values($capitals);
echo"\n\nThe starting of for-each loop for \$countries:\n\n";
foreach ($capitals1 as $capital) {
    echo $capital ."\n";
}

// B: we chan INTERCHANGE the KEYS with VALUES with array_flip();
$flipped_array = array_flip($capitals); // and this will return the flipped array.

//IMP: for each of Associated-Arrays:
echo"\n\nThe starting of for-each loop:\n\n";
$counter = 1;
foreach ($capitals as $countriN  => $capital) {
    echo "{$counter}) {$countriN}=> {$capital}\n";
    $counter++;
}
foreach ($names as $fname => $lname) {
    echo "$lname is the last name of $fname \n";
}


array_push($names, [ "motu" => "girde" ]);
echo($names["motu"]);
