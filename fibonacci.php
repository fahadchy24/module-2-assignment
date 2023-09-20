<?php

function printFibonacci($count)
{
    $num1 = 0;
    $num2 = 1;

    echo "First $count Fibonacci numbers: ";

    for ($i = 0; $i < $count; $i++) {
        echo $num1 . " ";

        $sum = $num1 + $num2;
        $num1 = $num2;
        $num2 = $sum;
    }
}

printFibonacci(15);