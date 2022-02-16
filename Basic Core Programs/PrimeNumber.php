<?php

    /*
        Prime Number Program in php. Developed by Sandesh Marathe
    */

    $number = readline('Enter the Number : ');

    $temp = 1;

    for ($i = 1; $i <= $number; $i++) {

        if ($number % $i == 0) {

            $temp++;
            break;
        }
    }

    if ($temp == 2) {

        echo $number." is Prime Number ";
    } else {

        echo $number." is Not Prime Number ";
    }

?>