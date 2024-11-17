<?php

echo "Enter an amount: ";
$input = trim(fgets(STDIN));

if (is_numeric($input)) {
    $vatRate = 0.15;
    $vat = $input * $vatRate;
    echo "The VAT for $input (15%) is: $vat\n";
} else {
    echo "Invalid input. Please enter a number.\n";
}
?>
