<?php

function printEvenNumbersUsingForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i.PHP_EOL;
        }
    }
}

// Call the function
printEvenNumbersUsingForLoop(1, 20, 1);
echo "\n";
?>