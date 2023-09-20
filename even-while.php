<?php
function printEvenNumbersUsingWhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

// Call the function
printEvenNumbersUsingWhileLoop(1, 20, 1);
echo "\n";
?>