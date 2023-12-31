<?php
    
 /**
 * While Loop (condition fulfil na hole 1 baro output dibe na)
 * start point
 * increment or decrement
 * end point
 */
    
 $s = 0;
 while($s < 10){
        echo $s;
        $s++;
 } 

 echo '<br>';

 for($i = 0; $i < 10; $i++){
      echo $i;
 }

 echo '<br>';
 
 $ghor = 5;
 for ($t = 1; $t <= 10; $t++){
      echo "$ghor X $t = ".($ghor*$t). '<br>';
 }

 echo '<br>';

 // do while loop (Condition fulfil na holeo 1 bar output dibe)

 $y = 20;
 /*
  * while ($y < 10){
    echo $y;
    $y++;
 }
 */
 
 

 do{
   echo $y;
   $y++;
 }while($y < 10);
         
?>