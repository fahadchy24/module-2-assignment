<?php

$num1 = 0;
$num2 = 1;
$count = 0;

echo "First 10 Fibonacci numbers less than or equal to 100: ";

while ($count < 10) {
    if ($num1 > 100) {
        break;
    }

    echo $num1 . " ";

    $sum = $num1 + $num2;
    $num1 = $num2;
    $num2 = $sum;

    $count++;
}