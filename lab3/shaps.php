<?php
for ($row = 1; $row <= 3; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo "* ";
    }
    echo "\n";
}

echo "\n";

for ($row = 3; $row > 0; $row--) { 
    for ($num = 1; $num <= $row; $num++) {  
        echo "$num ";
    }
    echo "\n"; 
}

echo "\n";

$alphabet = "ABCDEF";
$pos = 0;
for ($row = 1; $row <= 3; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo $alphabet[$pos++] . " ";
    }
    echo "\n";
}
?>
