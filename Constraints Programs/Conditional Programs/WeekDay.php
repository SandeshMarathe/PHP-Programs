<?php

    // Week Day Program Developed By Sandesh Marathe.

    // Taking input from User
    $a = readline('Enter the Number : ');

    if ($a == 1){  //Cheaking the equality '=='

        echo "Monday";
    } else if ($a == 2){

        echo "Tuesday";
    } else if ($a == 3){

        echo "Wednesday";
    } else if ($a == 4){

        echo "Thursday";
    } else if ($a == 5){

        echo "Friday";
    } else if ($a == 6){

        echo "Saturday";
    } else if ($a == 7){

        echo "Sunday";
    } else { // If the given number does not matched then only else part will execute

        echo "Invalid Number..!";
    }


?>