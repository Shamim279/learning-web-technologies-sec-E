<?php 

    if(isset($_GET['submit'])){
        $bloodgroup = $_GET['bloodgroup'];

        if(empty($bloodgroup))
        {
         
            echo "blood group not is submited";
        }
        else
        {
            echo "blood group submitted";
        }
    
    }else{
        //echo "invalid request!";
        header('location: blood_group.html');
    }





?>