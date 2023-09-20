<?php

    $first = 0;
    $second = 1;

    echo "Fibonacci Numbers:\n";
    
    for ($i = 0; $i <= 10; $i++) {
        echo $first . PHP_EOL;

        $next = $first + $second;

        if($next > 100){
            break;
        }
        $first = $second;
        $second = $next;
    }



?>