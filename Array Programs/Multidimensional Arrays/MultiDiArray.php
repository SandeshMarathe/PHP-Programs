<?php    

    // Multidiementional Program in php. Developed By Sandesh Marathe

    // Mulidimentional Array
    $employeearray = array  
        (  
            array(1,"Sandesh",400000),  
            array(2,"Akshay",500000),  
            array(3,"Kunal",300000)  
        );  
    
    for ($row = 0; $row < 3; $row++) {  

        for ($coloum = 0; $coloum < 3; $coloum++) {  

            echo $employeearray[$row][$coloum]."  ";  
        }  
        echo "\n";  
    }  
?>    