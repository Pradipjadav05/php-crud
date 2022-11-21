<?php
    session_start();
    // unset($_SESSION['uname']); //for perticual session destroy or unset
    session_unset(); //all the session unset
    session_destroy(); //all the session destroy
    header("Location:index.php");
?>