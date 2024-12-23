<?php 
    session_start();
    require_once('userModel.php');
    if(isset($_REQUEST['login_login'])){
        $username = trim($_REQUEST['username']);
        $password = trim($_REQUEST['password']);

            if($username == null || empty($password)){
                echo "Null username/password";
            }



            elseif($username!= $_SESSION['username'] || $password!== $_SESSION['pass']){
                
                echo "Invalid information";
            }

            
            elseif($username == $_SESSION['username'] && $password == $_SESSION['pass']){
                
                header('location: home.php');
                $_SESSION['status_login']=TRUE;
            }


    
    }else{
        header('location: welcome.php');
    }

?>