<?php
    session_start();
    if(isset($_POST['welcome_login']))
    {
        $_SESSION['status_welcome']=TRUE;
        header('location: login.php');
    }

    elseif(isset($_POST['register']))
    {
        $_SESSION['status_welcome']=TRUE;
        header('location: registration.php');
    }
    else{
        header('location: welcome.php');
    }
?>