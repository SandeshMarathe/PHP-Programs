<?php

    // Displaying One to Ten Number using Function in php Developed By Sandesh Marathe

    // function with two parameter
    function displayOneToTenNumber($startPoint, $endPoint) {

        for ($i = $startPoint; $i <= $endPoint; $i++) {

            echo "\n".$i;
        }

    }

    $startPoint = readline('Enter the Starting Point : ');
    $endPoint = readline('Enter the Ending Point : ');

    displayOneToTenNumber($startPoint, $endPoint);

?>