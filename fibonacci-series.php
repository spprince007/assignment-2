<?php

function printFibonacci($count) {
    $first = 0;
    $second = 1;

    echo "Fibonacci Numbers:\n";

    for ($i = 1; $i <= $count; $i++) {
        echo $first . " ";

        
        $next = $first + $second;

        
        $first = $second;
        $second = $next;
    }
}


printFibonacci(15);

