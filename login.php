<?php 
session_start();
include_once 'includes/dbh.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\mylibrary\style2.css">
</head>
<body>
<div class="container">
    <div class="login-container">
    <header>
         <h2>Log in to Cuea Library </h2>
    </header>
        <form action="includes/login.inc.php" method="POST">
            <label for="registration number">Registration Number</label>
            <input type="text" id="regName" name="userId"> 
            <label for="password">Password</label>
            <input type="text" id="password" name="userPwd">
            <p><a href="#">Forgot Password?</a></p>
            <input class= "button" type="submit" name="submit" value="Log In">     
       
        </form>

    </div>
    <p class="sign"><a href="signup.php">New to the Library? <span>SIGN UP <span> </a></p>

    </div>
</body>
</html>