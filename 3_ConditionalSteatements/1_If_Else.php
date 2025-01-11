<?php


$citizen = true;
$age = -11;
$age = abs($age); // absolute.

// IMP:  conventional way
// if ($citizen && $age >= 18) {
//     echo "Your are allowed to VOTE !";
// } else {
//     echo "Yore are not eligible to vote.";
// }
//

// G:   Make sure to use this most tims.
// **************************************
// B:   Alternative way :


// DX:
// --
// if($citizen && $age >= 18)
// --
// mean both should be true
// ∴ which also mean
// --
// "NOT EVEN 1 FALSE"   <------------

if (!$citizen || $age < 18) {
    echo "Yore are not eligible to vote.";
} else {
    echo "Your are allowed to VOTE !";
}

?>

