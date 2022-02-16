<?php

    // Program of Prime Number using Function in php Developed by Sandesh Marathe
    function getPrimeNumber($n) {     

        // Static Value
        $temp = 1;

        for ($i = 1; $i <= $n; $i++) {

            if ($n % $i == 0) {

                $temp++;
                break;
            }
        }
        
        if ($temp == 2) {

            echo "Number is Prime";
        } else {

            echo "Number is Not Prime";
        }

    }

    // Taking Input from User
    $n = readline('Enter the Number : ');

    // Function Calling
    getPrimeNumber($n);

?>