<?php 

    if(isset($_GET['submit'])){
        $dob = $_GET['dob'];

        if($dob == null)
        {
            echo "Null username/password";
        }

        else
        {
            header('location: Gender.html');
        }

    
    }else{
        //echo "invalid request!";
        header('location: dob.html');
    }





?>