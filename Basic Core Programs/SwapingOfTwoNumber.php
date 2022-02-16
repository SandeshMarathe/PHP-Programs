<?php

    /*
        Swaping Two Number Program in php. Developed By Sandesh Marathe
    */

    // Taking input from User
    $a = readline('Enter the Value of A : ');
    $b = readline('Enter the Value of B : ');

    $c = 0;

    // Displaying the Before Value of A and B
    echo "Before Value of A is : ".$a;
    echo "Before Value of B is : ".$b;

    // logic for swaping two number
    $c = $a;
    $a = $b;
    $b = $c;

    // Displaying the After Value of A and B
    echo "After Value of A is : ".$a;
    echo "After Value of B is : ".$b;

?>