<?php
function evenNumber(int $start, int $end, int $step): void
{
    if ($start % 2 !== 0) {
        $start++;
    }

    // For Loop
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i;
        if ($i < $end) {
            echo ", ";
        }
    }
    echo PHP_EOL;


    // While Loop
    $i = $start;
    while ($i <= $end) {
        echo $i;
        if ($i < $end) {
            echo ", ";

        }
        $i += $step;
    }
    echo PHP_EOL;


    // Do While Loop
    $i = $start;
    do {
        echo $i;
        if ($i < $end) {
            echo ", ";
        }
        $i += $step;
    } while ($i <= $end);
}

evenNumber(1, 20, 2);