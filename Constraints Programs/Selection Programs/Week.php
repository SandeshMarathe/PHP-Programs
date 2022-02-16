<?php

    // Week program in php using switch case Developed by Sandesh Marathe

    // Taking input from User
    $a = readline('Enter the Number : ');

    // syntax of switch case supports integer and char condition. if matchs then particular case will execute else
    switch ($a) {

        case 1:
                echo "Monday";
                break;
        case 2:
                echo "Tuesday";
                break;
        case 3:
                echo "Wednesday";
                break;
        case 4:
                echo "Thursday";
                break;
        case 5:
                echo "Friday";
                break;
        case 6:
                echo "Saturday";
                break;
        case 7:
                echo "Sunday";
                break;
        default: // defalut will execute
                echo "Incorrect Value..!";
                break;
    }

?>