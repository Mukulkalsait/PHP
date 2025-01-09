<?php


// IMP: can be aslo used like this.
// $foods = array("apple","banana","kiwi","mango");
$foods = ["apple","banana","kiwi","mango"];

// G: Access
echo $foods[3]. "= is the last element \n";
// G:  replace kiwi
$foods[2] = "pomogranade";

// Y: Methods

// TAG:1
array_push($foods, "kiwi");
// TAG:2
$popped_element = array_pop($foods);
echo "{$popped_element}= is the pooped element. \n";
// TAG:3
$shifted_element = array_shift($foods);
echo "{$shifted_element}= is the shifted element. \n";
// TAG:4
$reverserd_array = array_reverse($foods);
echo "\$reverserd_array= is the reversed array that we can 'foreach()' now. or can be reassigned to \$foods just in case.\n";
// TAG:5
$length = count($foods);
echo "{$length}= is the count (length) of the Array. \n";


//IMP:
echo"\n\nThe starting of for-each loop:\n\n";
$counter = 1;
foreach ($foods as $food) {
    echo "{$counter}) {$food}\n";
    $counter++;
}
