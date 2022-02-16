<?php

    // Display Unit Program Using Switch Case Developed by Sandesh Marathe

    // Taking input from User
    $a = readline('Enter the Number : ');

    // syntax of switch case supports integer and char condition. if matchs then particular case will execute else
    switch ($a) {

        case 1:
                echo "One";
                break;
        case 10:
                echo "Ten";
                break;
        case 100:
                echo "Hundread";
                break;
        case 1000:
                echo "Thousand";
                break;
        case 10000:
                echo "Ten Thousand";
                break;
        default: // defalut will execute
                echo "Incorrect Number..!";
                break;
    }

?>