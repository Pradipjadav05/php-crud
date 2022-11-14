<?php
    session_start();
    if(isset($_POST['submit'])){
        // echo $_POST['uname'];
        // echo $_POST['password'];

        if($_POST['uname'] == "admin" && $_POST['password'] == "admin"){
            $_SESSION['uname'] = $_POST['uname'];
            header("Location:home.php");
        }
        else{
            header("Location:index.php?error=Incorrect username and password");
        }
    }

?>