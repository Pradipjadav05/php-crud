<?php
    session_start();
    
    include_once 'db.php';
    if(isset($_POST['submit'])){
        // echo $_POST['uname'];
        // echo $_POST['password'];

        // if($_POST['uname'] == "admin" && $_POST['password'] == "admin"){
        //     $_SESSION['uname'] = $_POST['uname'];
        //     header("Location:home.php");
        // }
        // else{
        //     header("Location:index.php?error=Incorrect username and password");
        // }
        
        if($_POST['uname'] == "admin@gmail.com" && $_POST['password'] == "admin123"){
                $_SESSION['uname'] = $_POST['uname'];
                header("Location:./admin/adminUser.php");
        }
        else{
            $sql = "select * from user where Email = '".$_POST['uname']."' and Password = '".$_POST['password']."'";
            $res = mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0){
                $data = mysqli_fetch_array($res);
                $_SESSION['id'] = $data['id'];
                $_SESSION['uname'] = $data['Name'];
                $_SESSION['email'] = $data['Email'];
                $_SESSION['mobile'] = $data['Mobile'];
                if(isset($_POST['remember'])){
                    setcookie("nm",$data['Email'],time()+(10),"/");
                    setcookie("pss",$data['Password'],time()+(10),"/");
                }
                header("Location:home.php");
            }
            else{
                header("Location:index.php?error=Incorrect username and password");
            }
        }
    }

?>