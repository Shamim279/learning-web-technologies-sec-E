<?php 

    if(isset($_POST['submit'])){

        if (isset($_POST['blood'])) {
            //$group = $_POST['blood'];
            header('location: page7.html');
        }
    else{
        echo "Please select a bloodgroup.";
    }
}
    else{
        //echo "invalid request!";
        header('location: page6.html');
    }


?>