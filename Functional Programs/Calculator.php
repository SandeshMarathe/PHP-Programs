<?php

    // Calulator Program using function in php Developed by Sandesh Marathe

    // Do-While loop until the contion does not match it will iterate
    do
    {

        // Menu for the User 
        echo "\n***Calculator***";
        echo "\n 1.Addition";
        echo "\n 2.Substraction";
        echo "\n 3.Multiplication";
        echo "\n 4.Division";
        echo "\n 5.EXIT\n";

        $choice = readline('Select Your Choice : ');

        $a = readline('Enter the First Number : ');
        $b = readline('Enter the Second Number : ');

        switch ($choice) {

            case 1:
                    additionOfTwoNumber($a, $b);
                    break;
            case 2:
                    substractionOfTwoNumber($a, $b);
                    break;
            case 3:
                    multiplicationOfTwoNumber($a, $b);
                    break;
            case 4:
                    divisionOfTwoNumber($a, $b);
                    break;
            case 5:
                    echo "EXIT";
                    break;
            default:
                    echo "Invalid Choice..!";
                    break;
        }
    } while ($choice != 5);

    function additionOfTwoNumber($a, $b) {

            echo "\nAddition =".$a+$b;
    }

    function substractionOfTwoNumber($a, $b) {

        echo "\nSubstraction =".$a-$b;
    }

    function multiplicationOfTwoNumber($a, $b) {

        echo "\nMultiplication =".$a*$b;
    }

    function divisionOfTwoNumber($a, $b) {
    
        echo "\nDivision =".$a/$b;
    }
?>