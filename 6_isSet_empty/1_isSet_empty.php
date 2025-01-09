<?php


// HEAD:   isset();

// R: FALSE:
// 1. if var is not created
// 2. the var is null.
$isset_var = null;

// G: otherwise allways TRUE

if (isset($isset_var)) {
    echo"The {$isset_var}=varible is set \n";
} else {
    echo "The vaiable is not set. \n";
}


// HEAD:   empty();

// R: False condutions
// 1. var isn not declear.
// 2. var is set to null
//    ----------------  $empty_var = null;
// 3. var is set to boolean = FALSE;
//    ----------------  $empty_var = false;
// 4. var is set to EAMPTY STRING.
//    ----------------  $empyt_var = "";

// G: other all cuntditons are true.

if (empty($empty_var)) {
    echo "{$empty_var} = varibale is empty.\n";
} else {
    echo "{$empty_var} = varibale is NOT empty.\n";
}
