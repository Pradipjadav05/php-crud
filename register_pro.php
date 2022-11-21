<?php
    if(isset($_POST['register'])){
        if($_POST['email']!="" && $_POST['password']!=""){
            if($_POST['password']==$_POST['cpassword']){
                echo $_POST['name'];   
            }
            else{
                header("Location:register.php?error=Password and confirm password doesn't match.");
            }
        }
        else{
            header("Location:register.php?error=Please fill the all Details.");

        }
    }

?>