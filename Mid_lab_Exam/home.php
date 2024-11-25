<?php
    session_start();
    if(!isset($_SESSION['status_login'])){
        header('location: login.php');  
    }
?>

<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    
        <h1>Welcome Home! <?=$_SESSION['username']?></h1> 
        <table> 
            <tr>
                <td>Name:<?=$_SESSION['username']?></td>
         </tr>

         <tr>
                <td>Email:<?=$_SESSION['email']?></td>
         </tr>

         <tr>
                <td>Gender:<?=$_SESSION['gender']?></td>
         </tr>

         <tr>
                <td>Date_Of_Birth:<?=$_SESSION['dob']?></td>
         </tr>

         <tr>
                <td>Blood_Group:<?=$_SESSION['blood']?></td>
         </tr>
         <tr>
                <td>Degree:<?=$_SESSION['degree']?></td>
         </tr>

         
        </table> 
        <a href="logout.php"> logout </a>
</body>
</html>
