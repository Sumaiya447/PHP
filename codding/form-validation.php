<?php 
    $countries = ["Bangladesh", "India", "Pakistan", "Nepal", "Bhutan", "Sri Lanka", "Maldives", "Afganistan", "Mayanmar", "China", "Others"];
    if (isset($_POST['add'])){
        $sname=$_POST['sname'];
        $semail=$_POST['semail'];
        $gender=$_POST['gender'] ?? null;
        $skills=$_POST['skills'] ?? null;
        $country=$_POST['country'] ?? null;
        $pass=$_POST['pass'] ?? null;
        $cpass=$_POST['cpass'] ?? null;

        if(empty($sname)){
            $errname = "<span style='color:red'> Student name cannot be empty</span>";
        }
        elseif(!preg_match("/^[a-zA-Z. ]*$/",$sname)){
            $errname = "<span style='color:red'> Only letters and white space allowed</span>";
        }else{
            $crrname=$sname;
        }
        if(empty($semail)){
            $erremail = "<span style='color:red'> Student email cannot be empty</span>";
        }elseif(!filter_var($semail, FILTER_VALIDATE_EMAIL)){
            $erremail = "<span style='color:red'> Invalid email format</span>";
        }else{
            $crremail = $semail;
        }
        if(empty($gender)){
            $errgender = "<span style='color:red'>Please select your gender </span>";
        }else{
            $crrgender = $gender;
        }
        if(empty($skills)){
            $errskills = "<span style='color:red'> Skills must be select</span>";
        }else{
            $crrskills = $skills ;
        }
        if(empty($country)){
            $errcountry = "<span style='color:red'> Please select your country</span>";
        }else{
            $crrcountry = $country ;
        }
        if(empty($pass)){
            $errpass= "<span style='color:red'> Password cannot be empty</span>";
        }elseif(!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",$pass)){
            $errpass = "<span style='color:red'>Please provide a strong password </span>";
        }else{
            $crrpass = $pass;
        }
        if(empty($pass) && !empty($cpass)){
            if ($pass != $cpass){
                $errpass = "<span style='color:red'>Password and confirm password must be same </span>";
            }
        }
    }        
 ?>

 <form action="" method="POST">
    <!-- student name -->
    <label for="">Student Name:</label>
    <input type="text" name="sname" placeholder="Student Name" value=" <?= $crrname ?? null ?>">
    <?= $errname ?? null ?>
    <br><br>

    <!-- Email -->
    <label for="">Student Email:</label>
    <input type="email" name="semail" placeholder="example:abc@gmail.com" value=" <?= $crremail ?? null ?>">
    <?= $erremail ?? null ?>
    <br><br>

    <!-- gender -->
    <label for="">Gender:</label>
    <input type="radio" name="gender" value="Male" <?= isset($crrgender) && $crrgender ==  "Male" ? "checked":null ?>>Male
    <input type="radio" name="gender" value="Female" <?= isset($crrgender) && $crrgender ==  "Female" ? "checked":null ?>>Female
    <?= $errgender ?? null ?>
    <br><br>

    <!-- skills -->
    <label for="">Student Skills:</label>
    <input type="checkbox" name="skills[]" value="PHP" <?=isset ($crrskills) && in_array("PHP",$crrskills) ? "checked":null ?>>PHP
    <input type="checkbox" name="skills[]" value="Java" <?=isset ($crrskills) && in_array("Java",$crrskills) ? "checked":null ?>>Java
    <input type="checkbox" name="skills[]" value="Python" <?=isset ($crrskills) && in_array("Python",$crrskills) ? "checked":null ?>>Python
    <input type="checkbox" name="skills[]" value="C++" <?=isset ($crrskills) && in_array("C++",$crrskills) ? "checked":null ?>>C++
    <?= $errskills ?? null ?>
    <br><br>

    <!-- country -->
    <label for="">Country:</label>
    <select name="country" id="">
        <option value="">Select Country </option>
        <?php 
            foreach ($countries as $country) {
                if (isset($crrcountry) && $crrcountry == $country){
                    echo "<option value='$country' selected>$country</option>";
                    continue;
                }
                echo "<option value='$country'>$country</option>";
               
            }
         ?>
    </select>
    <?= $errcountry ?? null ?>
    <br><br>

    <!-- password -->
    <label for="">Password:</label>
    <input type="password" name="pass" placeholder="password" >
    <?= $errpass ?? null ?>
    <br><br>

    <!-- Confirm Password -->
    <label for="">Confirm Password:</label>
    <input type="password" name="cpass" placeholder="Confirm Password" >
    <?= $errcpass ?? null ?>
    <br><br>

    <!-- button -->
    <input type="submit" name="add" value="Add Student">
 </form>

<div style='color:green'>
<?php 
    if(isset($crrname) && isset($crremail) && isset($crrgender) && isset($crrskills) && isset($crrcountry) && isset($crrpass) && isset($cpass)){
        echo $crrname ?? null ;
        echo "<br>";
        echo $crremail ?? null ;
        echo "<br>";
        echo $crrgender ?? null ;
        echo "<br>";
        foreach ($crrskills as $key => $skills){
            if($key == count($crrskills)-1){
                echo $skills;
                break;
            }
            echo $skills. ", ";
        }
        echo "<br>";
        echo $crrcountry ?? null ;
        echo "<br>";
        echo $crrpass?? null ;
    }
   
 ?> 
</div>
        
        
