<?php

$matrix = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

for ($x = 0; $x < count($matrix); $x++) {
    for ($y = 0; $y < count($matrix[$x]); $y++) {
        echo $matrix[$x][$y] . " ";
    }
    echo "\n";
}

echo "\n";

for ($a = 3; $a > 0; $a--) {
    for ($b = 1; $b <= $a; $b++) {
        echo "$b ";
    }
    echo "\n";
}

echo "\n";

$alpha = "ABCDEF";
$pos = 0;
for ($m = 1; $m <= 3; $m++) {
    for ($n = 1; $n <= $m; $n++) {
        echo $alpha[$pos++] . " ";
    }
    echo "\n";
}

?>
