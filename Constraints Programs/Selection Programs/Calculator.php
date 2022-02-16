<?php

    // Arithmetic program using switch case Developed by Sandesh Marathe

    // Calculator Menu
    echo "***Calculator***";
    echo "\n1.Addition";
    echo "\n2.Substraction";
    echo "\n3.Multiplication";
    echo "\n4.Division\n";

    $choice = readline('Select your Choice : ');

    $a = readline('Enter the First Number : ');
    $b = readline('Enter the Second Number : ');

    // syntax of switch case supports integer and char condition. if matchs then particular case will execute else
    switch ($choice) {

        case 1:
                echo "Addition =".$a+$b;
                break;
        case 2:
                echo "Substraction =".$a-$b;
                break;
        case 3:
                echo "Multiplication =".$a*$b;
                break;
        case 4:
                echo "Division =".$a/$b;
                break;
        default: // defalut will execute
                echo "Incorrect Choice..!";
                break;
    }



?>