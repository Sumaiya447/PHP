<?php
    /** PHP DATA TYPES
     * 1.String
     * 2.Integer
     * 3.Float
     * 4.Boolean
     * 5.Array
     * 6.Object
     * 7.Null
     * 8.Resource
     */ 

     //1.String
     $name = "Sima Sumaiya";
     var_dump($name);
     

    //  2.Integer
    $age = 20;
    var_dump($age);


    // 3.Float
    $cgpa = 3.50;
    var_dump($cgpa);


    // 4.Boolean
    $isMale = true;
    var_dump($isMale);


    // 5.Array
    $friends = ['sima', 'sumaiya', 'sima sumaiya'];
    var_dump($friends);


    // 6.Object
    class Student{
        function department(){
            return 'CSE';
        }
    }
    $student = new Student;
    var_dump($student);


    // 7.Null
    $name = null;
    var_dump($name);


    // 8.Resource
    

?>