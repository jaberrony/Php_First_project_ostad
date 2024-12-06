<?php

define("FACTOR", 9 / 5); // Define as a numeric value
define("OFFSET", 32);    // Define as a numeric value

echo "Enter Temperature Value: ";
$temperature = (float) readline();

echo "Convert to (1: Fahrenheit, 2: Celsius): ";
$choice = (int) readline();

switch ($choice) {
    case 1:
        $result = $temperature * FACTOR + OFFSET;
        echo "Temperature in Fahrenheit: $result\n";
        break;

    case 2: 
        $result = ($temperature - OFFSET) / FACTOR;
        echo "Temperature in Celsius: $result\n";
        break;

    default:
        echo "Invalid Choice!\n";
        break;
}
