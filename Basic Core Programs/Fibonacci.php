<?php

    /*
        Fibonacci Program in php. Developed by Sandesh Marathe
    */

    $a = 0;
    $b = 1;

    echo $a;
    echo "\n".$b;

    // iteration to print Fibonacci number with given condition
    for ($i = 2; $i <= 5; $i++) {

        $c = $a + $b;

        echo "\n".$c;

        $a = $b;
        $b = $c;
    }

?>