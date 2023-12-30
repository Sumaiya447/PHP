<?php
    // Electric bill calculation (For first 50 units – 3.50 tk/unit For next 100 units – 4.00 tk/unit For next 100 units – 5.20 tk/unit For units above 250 – 6.50 tk/unit)
    

     $unit = 350;
     if($unit <= 50){
        $bill = $unit * 3.50;
     }elseif($unit <= 150){
        $bill = 50 * 3.50 + ($unit-50) * 4.00;
     }elseif($unit <= 250){
        $bill = 50 * 3.50 + 100 * 4.00 + ($unit-150) * 5.20;
     }else{
        $bill = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($unit-250) * 6.50;
     }
     echo $bill.'<br>';
   
    //A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division)
     $num1 = 10;
     $num2 = 20;
     $operator = '+';
     switch($operator){
        case '+':
            echo $num1 + $num2;
            break; 
        case '-':
            echo $num1 - $num2;
            break; 
        case '*':
            echo $num1 * $num2;
            break;  
        case '/':
            echo $num1 / $num2;
            break; 
        default:
            echo 'Invalid Operator';        
     }
     echo '<br>';

    //Check if a person is eligible to vote by age
    $age = 18;
    if($age >= 18){
        echo 'You are eligible for vote';
    }else{
        echo 'You are not eligible for vote';
    }
    echo '<br>';
    //Check if a person is eligible for marriage in BD by gender.
    $age = 21;
    $gender = 'Male';
    if($gender === 'Female'){
        if($age >= 18){
            echo 'You are aligible for marriage';
        }else{
            echo 'You are not eligible for marriage';
        }
    }else{
        if($age >= 21){
            echo 'You are aligible for marriage';
        }else{
            echo 'You are not eligible for marriage';
        }
    }
    echo '<br>';
    // Check if number is positive or negetive
    $number = 0;
    if ($number > 0){
        echo 'The number is positive';
    }elseif($number < 0){
        echo 'The number is nagative';
    }else{
       echo 'Zero';
    } 
    echo '<br>';
    // Check if number is odd or even vii.
    $num = 11;
    if ($num % 2 === 0){
        echo 'The number is Even';
    }else{
        echo 'The number is Odd';
    }
    echo '<br>';
    // Check if data is integer or string
    $data = 'Taka';
    if (is_int($data)){
        echo 'Interger';
    }else{
        echo 'String';
    }
?>