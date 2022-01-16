<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Registration System</title>
</head>
<body>
    <?php session_start() 
    ?>
    <!-- To check if user logged in or not-->
    <?php if(!isset($_SESSION['loggedInID'])){
        // if not logged in then it will redirect to login page
        header("Location:login.php"); } ?>
    <?php
        // to show logged in user name
        if(isset($_SESSION['loggedInID'])) { ?>
           <h2> Name : <?php echo $_SESSION['username']; ?> </h2>
             <h2>Email :<?php echo $_SESSION['email']; ?> </h2>
            <form action="function.php" method="post">
                <input type="submit" name="logout" value="Logout">
            </form>
        <?php } ?> 
</body>
</html>