<?php 

    if(isset($_GET['submit'])){
        $degree = $_GET['degree'];

        if(empty($degree))
        {
           echo " degree is not select";
        }
        else
        {
            header('location: blood_group.html');
        }

    
    }else{
        //echo "invalid request!";
        header('location: degree.html');
    }





?>