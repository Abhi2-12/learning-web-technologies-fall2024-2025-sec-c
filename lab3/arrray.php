<?php

$list = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

for ($row = 0; $row < count($list); $row++) {
    for ($col = 0; $col < count($list[$row]); $col++) {
        echo $list[$row][$col] . " ";
    }
    echo "\n";
}

echo "\n";

for ($x = 3; $x > 0; $x--) { 
    for ($y = 1; $y <= $x; $y++) {  
        echo "$y ";
    }
    echo "\n";
}

echo "\n";

$chars = "ABCDEF";
$pointer = 0;
for ($a = 1; $a <= 3; $a++) {
    for ($b = 1; $b <= $a; $b++) {
        echo $chars[$pointer++] . " ";
    }
    echo "\n";
}

?>
