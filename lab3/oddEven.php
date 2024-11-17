<?php

echo "Please input a number: ";

$value = trim(fgets(STDIN));

if (is_numeric($value)) {
    if ($value % 2 === 0) {
        echo "$value is an Even number\n";
    } else {
        echo "$value is an Odd number\n";
    }
} else {
    echo "Error: Invalid input provided.\n";
}
?>

