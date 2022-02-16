<?php

    // Print Words using Switch Case programs Developed by Sandesh Marathe

    // Taking input from User
    $a = readline('Enter the Number : ');

    // syntax of switch case supports integer and char condition. if matchs then particular case will execute else
    switch ($a) {

        case 1:
                echo "One";
                break;
        case 2:
                echo "Two";
                break;
        case 3:
                echo "Three";
                break;
        case 4:
                echo "Four";
                break;
        case 5:
                echo "Five";
                break;
        default: // defalut will execute
                echo "Incorrect Number..!";
                break;
    }

?>