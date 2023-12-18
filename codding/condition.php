<?php
    $age = 16;
    if ($age <=12 ) {
        echo 'You are baby';
    }elseif ($age <=17 ){
        echo 'You are teenager';
    }else{
        echo 'To Young';
    }

    echo'<br>';

    //Switch Statement
    $age = 16;
    switch ($age) {
        case($age <=12):
            echo 'You are baby';
            break;
        case($age <=17 ):   
            echo 'You are teenager';
            break; 
        default:
            echo 'You are too Young';
            
    }
    echo '<br>';


    //Switch Statement
    $favcolor = 'red';
    switch ($favcolor) {
        case 'green':
            echo 'My favorite color is Green';
            break;
        case 'purple':
            echo 'My favorite color is Purple';
            break;
        case 'blue':
            echo 'My favorite color is Blue';
            break;
        default:
            echo 'My favorite color is red';    
    }
    echo '<br>';
    
    if ($favcolor == 'green'){
        echo 'My favorite color is Green';
    }elseif ($favcolor == 'red'){
        echo 'My favorite color is Red';
    }elseif ($favcolor == 'blue'){
        echo 'My favorite color is blue';
    }else{
        echo 'My favorite color is purple';
    }
       
    echo '<br>';
    //Ternary Operator
    $age = 36;
    echo($age >=18)?'You are an adult':'You are not an adult';
?>