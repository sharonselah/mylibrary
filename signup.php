
<?php session_start(); 
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
    <div class="sign-container">
    <header>
         <h2>User Registration Cuea Library</h2>
    </header>
        <form action="includes/signup.inc.php" method="POST">
        <label for="registration number">Registration Number</label>
            <input type="text" id="regName" name="userId" placeholder="1039669">
        <label for="firstname">First name</label>
            <input type="text" id="firstname" name="userFirst" placeholder="Jane">
        <label for="lastname">Last name</label>
            <input type="text" id="lastname" name="userLast" placeholder="Doe">
        <label for="email">Email</label>
             <input type="text" id="email" name="userEmail" placeholder="janedoe@gmail.com">
        <label for="password">Password</label>
            <input type="text" id="password" name="userPwd" placeholder="password123">
        <input class= "button" type="submit" name="submit" value="Register">  
        </form>
    </div>
</body>
</html>