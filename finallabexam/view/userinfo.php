<?php
require_once('../model/usermodel.php');
$users = getAllUser(); 
?>
<html>
<head>
    <title>User Information</title>
</head>
<body>
    <div align='center'>
    <h3>User - Details</h3>
    </div>
    <table border="1" style="width: 90%; margin: auto; text-align: center;">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user) { ?>
        <tr>
            <td><?= $user['username'] ?></td>
            <td><?= $user['password'] ?></td>


            <td>
                <a href="../controller/update.php?id=<?= $user['id'] ?>">Update</a> | 
                <a href="../controller/delete.php?id=<?= $user['id'] ?>" >Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <a href="../controller/logout.php"><button>Logout</button></a>
</body>
</html>
