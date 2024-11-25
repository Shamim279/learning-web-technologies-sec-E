<?php

    session_start();
    unset($_SESSION['status_login']);
   // session_destroy();

    header('location: Login.php');
?>