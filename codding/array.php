<?php 
    // $array = array(1,2,3,4,5,6,7);
    $personNames = ["Rahim","Karim","Akash","Setu","Sathi","Safa"];
    echo $personNames[0];
    echo "<br>";

    for ($i=0; $i < count($personNames); $i++){
        echo $personNames[$i]."<br>";
    }
    echo "<pre>";
    print_r($personNames); //devloper tool.user ke dekhanor jonno na
    echo "</pre>";
    echo "<br>";

    //$key hoche index number define kore and $value define kore value
    foreach ($personNames as $key => $value){
        echo $key. ".". $value . "<br>";
    }
    echo "<br>";
    //Associative Array (index number dite hoy and array operator(=>) use korte hoy)
    $person = [
        "fname" => "Rahim",
        "lname" => "Badsah",
        "age" => "25",
        "city" => "Dhaka",
        "country" => "Bangladesh",
    ];
    echo $person ["fname"] . "<br>";
    foreach($person as $key => $value){
            echo ucfirst ($key)." : ".$value."<br>";
    }

    //Multidimensional Array
    $personInfo = [
        ["Tripty", 25, "Femal", "Kustia"],
        ["Sathi", 25, "Femal", "Bagura"],
        ["Safa", 25, "Femal", "Faridpur"],
        ["Antora", 25, "Femal", "Dhaka"],
    ];
    echo $personInfo [0] [0];
    echo "<pre>";
    print_r($personInfo);
    echo "</pre>";
    echo "<br>";
    
    for($i=0; $i < count($personInfo); $i++){
        for($s=0; $s < count($personInfo[$i]); $s++){
            echo $personInfo [$i][$s]." ";
        }
        echo "<br>";
    }
    echo "<br>";
    foreach($personInfo as $value ){
        foreach($value as $val ){
            echo $val." ";
        }
        echo "<br>";
    
    }
    
 ?>