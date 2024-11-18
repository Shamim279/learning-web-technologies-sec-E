<?php 

    if(isset($_GET['submit'])){
        $gender = $_GET['gender'];

        if(empty($gender))
        {
           
           echo "Gender is reqird";
        }
        else
        { 
            header('location: Degree.html');
         
        }

    
    }else{
        //echo "invalid request!";
        header('location: gender.html');
    }





?>