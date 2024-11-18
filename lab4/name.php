<?php 

    if(isset($_GET['submit'])){
        $name = $_GET['username'];

        if($name == null)
        {
            echo "Null username";
        }
        elseif (strlen($name)<2)
         {

            echo "Entry less than 2:";
        }
   
        else
        {
            header('location: Email.html');
        }

    
    }else
    {
        //echo "invalid request!";
        header('location: name.html');
    }



?>