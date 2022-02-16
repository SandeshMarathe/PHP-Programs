<?php

    // Factorial Program using For Loop Developed By Sandesh Marathe

    // Taking input from user
    $n = readline('Enter the Number : ');

    $fact = 1;

    // iteration to get factorial number
    for ($i = 1; $i <= $n; $i++) {

        $fact = $fact*$i;
    }

    echo "Factorial : ".$fact;

?>