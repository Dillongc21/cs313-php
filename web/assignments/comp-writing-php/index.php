<?php
session_start();
$_SESSION['user'] = 'dillongc';
$_SESSION['user_is_admin'] = true;
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Competitive Writing App</title>
</head>
<body>

    <?php include 'header.php' ?>

    <h1>Competitive Writing App</h1>

    <ul>
        <?php
        if (!empty($_SESSION['user'])){
            if($_SESSION['user_is_admin']){
                echo '<li><a href="user-files/getUsers.php">Users</a></li>';
            }
            echo '<li><a href="user-files/logOut.php">Log Out</a></li>';
        }

        else{
            echo '<li><a href="user-files/logIn.php">Log In</a></li>';
            echo '<li><a href="user-files/createUser.php">Create New User</a></li>';
        }

        ?>
    </ul>



</body>
</html>