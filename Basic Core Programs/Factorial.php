<?php

    /*
        Factorial Program in php. Developed By Sandesh Marathe
    */

    // Taking input from User
    $a = readline('Enter the Number : ');

    // Static value for variable fact is 1
    $fact = 1;

    // Iteration to get Factorial Number
    for ($i = 1; $i <= $a; $i++) {

        $fact = $fact * $i;
    }

    // Displaying the Factorial Number of given Number 
    echo "Factorial Number of ".$a." is : ".$fact;

?>