<?php

echo "Input the first number: ";
$val1 = trim(fgets(STDIN));

echo "Input the second number: ";
$val2 = trim(fgets(STDIN));

echo "Input the third number: ";
$val3 = trim(fgets(STDIN));

if (is_numeric($val1) && is_numeric($val2) && is_numeric($val3)) {
    if ($val1 >= $val2 && $val1 >= $val3) {
        echo "Largest number is: $val1\n";
    } elseif ($val2 >= $val1 && $val2 >= $val3) {
        echo "Largest number is: $val2\n";
    } else {
        echo "Largest number is: $val3\n";
    }
} else {
    echo "Error: Invalid input\n";
}
?>
