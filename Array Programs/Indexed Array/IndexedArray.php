<?php

    // Indexed Program using Array in php. Developed By Sandesh Marathe

    // Taking dinamically input of Size
    $arraySize = readline('Enter the Size Of Array : ');

    $indexedArray = array();

    // For loop  for Taking input 
    for ($i = 0; $i < $arraySize; $i++) {

        $indexedArray[$i] = readline('Enter the Name : ');
    }

    // For loop for Displaying output
    for ($i = 0; $i < count($indexedArray); $i++) {

        echo "Result : ".$indexedArray[$i];
        echo "\n";
    }

?>