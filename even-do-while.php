<?php
function printEvenNumbersUsingDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i .PHP_EOL;
        }
        $i += $step;
    } while ($i <= $end);
}

// Call the function
printEvenNumbersUsingDoWhileLoop(1, 20, 1);
echo "\n";
