<?php 

    if(isset($_POST['submit'])){

        if (isset($_POST['degree'])&& count($_POST['degree'])>=2) {
            $degree = $_POST['degree'];
            header('location: page6.html');
        }
    else{
        echo "select  atleast 2 degrees!";
    }
}
    else{
        //echo "invalid request!";
        header('location: page5.html');
    }


?>