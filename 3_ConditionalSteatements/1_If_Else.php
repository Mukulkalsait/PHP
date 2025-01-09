<?php


$citizen = true;
$age = -11;
$age = abs($age);

// IMP:  conventional way
// if ($citizen && $age >= 18) {
//     echo "Your are allowed to VOTE !";
// } else {
//     echo "Yore are not eligible to vote.";
// }
//

// B:  Alternative way :

if (!$citizen || $age < 18) {
    echo "Yore are not eligible to vote.";
} else {
    echo "Your are allowed to VOTE !";
}

?>

