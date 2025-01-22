<?php



// DX: this code here will be repeated ...
// NON ENDINIG LOOP
// lable:
// echo " this number is devisible by 4";

$num = 12;
$x = 0;

for ($i = 0; $i <= $num; $i++) {
    if ($i / 4 == 0) {
        $x = $i;
        goto lable;
    }
}

echo " the loop ended";
echo "nouthing here will be printed because the code will run directlyh to lable ";




//IMP: nouting above will be going to exicuted.

lable:
echo " this number is devisible by 4";
