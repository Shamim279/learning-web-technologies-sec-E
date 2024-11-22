<?php 

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $atfound= false;
        $dotfound= false;
        $flag = 0;
        $flag2=0;
        for($i=0; $i <strlen($email);$i++)
        {
            $char=$email[$i];
            if($char=='@')
            {
                if($atfound)
                {
                    $flag=1;
                }
                $atfound=true;
            }
            elseif($char=='.')
            {
                if($dotfound)
                {
                    $flag1=1;
                }
                $dotfound=true;
            }
        }
        if($email == null){
            echo "Null Entry";
        }

        elseif($flag==1){
            echo "Invalid Email";
        }
    else{
        header('location: page3.html');
    }
}

    else{
        //echo "invalid request!";
        header('location: page2.html');
    }


?>