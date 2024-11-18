<?php 

    if(isset($_GET['submit'])){
        $email = $_GET['email'];

        if($email == null)
        {
            echo "Null username/password";
        }

        else
        {
            header('location: Email.html');
        }

    
    }else{
        //echo "invalid request!";
        header('location: email.html');
    }





?>