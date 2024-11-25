<?php
    session_start(); 
    
    if(!isset($_SESSION['status_welcome']))
    {
        header('location:welcome.php');
    } 
        
?> 


<html>
<head>
    <title>Registration</title>
</head>
<body>
    <form action="registrationcheck.php" method="post" enctype="">
        <fieldset>
            <h2 align="center">Registration Form</h2>
            <h4>PERSON PROFILE</h4>
            <table border="1">
                <tr>
                    <td>Name:</td>
                    <td><input type="text"  name="name" value=""></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email"  name="email"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio"  name="gender" value="male">Male
                        <input type="radio"  name="gender" value="female">Female
                        <input type="radio"  name="gender" value="other">Other
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date"  name="dob" placeholder="dd/mm/yyyy"></td>
                </tr>
                <tr>
                    <td>Blood Group:</td>
                    <td>
                        <select  name="blood_group">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Degree:</td>
                    <td>
                        <input type="checkbox"  name="degree" value="SSC">SSC
                        <input type="checkbox"  name="degree" value="HSC">HSC
                        <input type="checkbox"  name="degree" value="BSc">BSc.
                        <input type="checkbox"  name="degree" value="MSc">MSc.
                    </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password"  name="pass" >
                </tr>
                <tr>
                    <td>Confirm Passowrd</td>
                    <td><input type="password"  name="confirm_pass"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="Submit" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>