<?php 

    session_start();
    if(isset($_SESSION['login_admin'])) 
    {
        unset($_SESSION['login_admin']);
        header("location:adminlogin.php");
    }
    else{
        header("location:index.php");
    }
    
    
?>
