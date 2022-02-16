<?php

    // Display Unit Program Developed By Sandesh Marathe.

    // Taking input from User
    $a = readline('Enter the Number : ');

    if ($a == 1){  //Cheaking the equality '=='

        echo "One";
    } else if ($a == 10){

        echo "Ten";
    } else if ($a == 100){

        echo "Hundred";
    } else if ($a == 1000){

        echo "Thousand";
    } else if ($a == 10000){

        echo "Tenthousand";
    } else { // If the given number does not matched then only else part will execute

        echo "Invalid Number..!";
    }


?>