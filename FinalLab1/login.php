<?php
    session_start();
    if(!isset($_SESSION['status_registration'])){
        header('location: welcome.php');  
    }
?>

<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
        <fieldset>
         <form method="post" action="logincheck.php">   
            <table  align="center">
                <tr>
                    <h2 align="center">Login page</h1>
                </tr>
                <tr>
                    <td>
                        Username: <input type="text" name="username" value="" />
                    </td>
                    <tr>
                        <td>
                        Password : <input type="password" name="password" value="" />
                        </td>
                    </tr>
                    <td>
                        <input type="submit" name="login_login" value="Login" />
                    </td>
                    <td>
                        <input type="reset" name="" value="Reset" />
                    </td>
                </tr>  
            </table>
        </fieldset>
    </form>
</body>
</html>
