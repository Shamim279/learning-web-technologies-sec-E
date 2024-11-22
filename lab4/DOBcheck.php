<?php 

    if(isset($_POST['submit'])){
        $date = $_POST['date'];

        if($date == null){
            echo "Please select a date";
        }
    else{
        header('location: page4.html');
    }
}
    else{
        //echo "invalid request!";
        header('location: page3.html');
    }


?>