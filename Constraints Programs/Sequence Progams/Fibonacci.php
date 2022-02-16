<?php

    // Fibonacci program using for loop Developed by Sandesh Marathe

    // Default value as per rule
    $a = 0;
    $b = 1;

    echo $a;
    echo "\n".$b;

    // iteration of loop
    for ($i = 2; $i <= 5; $i++) {

        // to get Fibonacci Number
        $c = $a + $b;

        echo "\n".$c;

        $a = $b;
        $b = $c;

    }

?>