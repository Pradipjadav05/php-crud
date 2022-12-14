<?php

    echo $_POST['name'];
    // echo $_POST['email'];
    // echo $_POST['password'];
    // // echo $_POST['profilePhoto'];
    // $filename = $_FILES['profilePhoto']['name'];
    // echo $filename;
    // header('Location:index.php');
    include_once 'db.php';
    if(isset($_POST['register'])){
        if($_POST['password'] == $_POST['cpassword']){
            
            $filename = $_FILES['profilePhoto']['name'];
            $source = $_FILES['profilePhoto']['tmp_name'];
            $destination = "upload/".$filename;
            $type = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
            if($type=="png" || $type=="jpg"){
                move_uploaded_file($source,$destination);
            }
            else{
                header("Location:register.php?error=Image must be .jpg or .png.");
                exit();
            }
            
            $query = "select * from user where Email = '".$_POST['email']."'";
            $res = mysqli_query($conn,$query);
            if(mysqli_num_rows($res)>0){
                header("Location:register.php?error=User already exits.");
            }
            else{
                $sql = "insert into user(Name,Email,Mobile,Photo,Password) values('".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','".$destination."','".$_POST['password']."')";
                // echo $sql;
                $res = mysqli_query($conn,$sql);
                // $res=$conn->query($sql);
                if($res){
                    // echo "<script>alert('Record inserted...')</script>";
                    // echo("<script>>window.location.href = 'index.php';</script>");
                    header("Location:index.php");
                }
                else{
                    echo "<script>alert('Something wrong...')</script>";
                }
            }
        }
        else{
            header("Location:register.php?error=Doesn't match password and confirm password.");

            // echo "<script>alert('Do no match Password and Confirm Password.')</script>";

            // echo "<script> 
            // document.getElementById('error').innerHTML = 'Do no match Password and Confirm Password.';
            // </script>";
        }
    }
?>