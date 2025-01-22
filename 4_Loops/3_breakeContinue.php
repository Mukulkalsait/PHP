<?php

for ($i = 0; $i < 100; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i;
}

echo " \n new loop \n";

for ($i = 1; $i < 100; $i++) {
    if ($i % 5 == 0) {
        break;
    }
    echo $i;
}
