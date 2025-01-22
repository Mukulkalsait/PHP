<?php



//
// G:nested loops
//
//
//

$row = 10;
$col = 10;


//B: print the 1 to 100 table.

// TAG: this is how i tried...
// --
// for ($i = 0; $i <= $row; $i++) {
//     for ($j = 0; $j <= $col; $j++) {
//         echo  "{$i}{$j} |";
//     }
//     echo  "\n";
// }

//HEAD: this is how they recomended :

for ($l = 0; $l <= 100; $l += 10) {
    // echo "{$l} \n";
    for ($i = $l; $i <= ($l + 10); $i++) {

        echo "{$i}|";
    }
    echo"\n";
}
