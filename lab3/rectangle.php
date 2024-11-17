<?php

echo "Input the rectangle's length: ";
$len = trim(fgets(STDIN));

echo "Input the rectangle's width: ";
$wid = trim(fgets(STDIN));

if (is_numeric($len) && is_numeric($wid)) {
    $rectArea = $len * $wid;
    $rectPerimeter = 2 * ($len + $wid);

    echo "Rectangle Area: $rectArea\n";
    echo "Rectangle Perimeter: $rectPerimeter\n";
} else {
    echo "Error: Please provide valid numeric values.\n";
}
?>
