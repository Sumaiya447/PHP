<?php
    //1. ARITHMETIC OPERATORS
    /**
     * (+) Addition
     * (-) Subtraction
     * (*) Multiplication
     * (/) Division
     * (%) Modulus
     * (**) Exponentiation
     */


    //2. LOGICAL OPERATORS
    /**
     * (&&) and 
     * (||) or
     * xor
     */
     
    //  (&&) and  (2 ta variable e true hote hobe)
    $x = 1;
    $y = 1;
    if ($x == 1 && $y == 1) {
        echo"Yes";
    } 

    // (||) or (2 ti othoba 1 ti variable true holeo cholbe)
    $x = 1;
    $y = 1;
    if ($x == 1 || $y == 2) {
        echo"Yes";
    } 

    // xor (2 ti variable true hole echo korbe na ,jekono ekti true hote hobe)
    $x = 1;
    $y = 1;
    if ($x == 2 xor $y == 1) {
        echo"Yes";
    } 


    //3. COMPARISONS OPERATORS
    /**
     * (==) Equal
     * (===) Identical
     * (!=) Not Equal
     * (!==) Not Identical
     * (>) Greater than
     * (<) Less than
     * (>=) Greater than or equal to
     * (<=) Less than or equal to
     * (<=>) Spaceship{first value jodi 2nd value er soman hoy tahole 0 echo korbe, boro hole 1 echo korbe and soto hole -1 echo korbe.}
     */

    // (==) Equal {Just value ta check korbe}
     $x = 5;
     $y = '5';
     if ($x == $y) {
        echo 'Welcome';
     }


    //  (===) Identical (Data type and Value 2tai check korbe)
    $x = 5;
    $y = '5';
    if ($x === $y) {
       echo 'Welcome';
    }


    // ASSINGMENT OPERATORS
    /**
     * (=) Assign
     * (+=) Add and Assing
     * (-=) Subtract and Assing
     * (*=) Multiply and Assing
     * (/=) Divide and Assing
     * (%=) Modulus and Assing
     * (**=) Exponentiation and Assing
     */




    
?>