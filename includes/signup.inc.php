<?php
//check if someone clicked the submit button
if (isset($_POST['submit'])){
    include_once 'dbh.inc.php';
    $userId= mysqli_real_escape_string ($conn, $_POST['userId']);
    $userFirst= mysqli_real_escape_string ($conn, $_POST['userFirst']);
    $userLast =mysqli_real_escape_string ($conn, $_POST['userLast']);
    $userEmail= mysqli_real_escape_string ($conn, $_POST['userEmail']);
    $userPwd= mysqli_real_escape_string ($conn, $_POST['userPwd']);

    if(empty($userId) || empty ($userFirst) || empty ($userLast)
     || empty ($userEmail) || empty ($userPwd) ){
         header ("Location: ../signup.php? signup=empty");
         exit();
     }else{
        //check if input chracters are valid.
        if(!preg_match("/^[a-zA-Z]+$/", $userFirst)){
             header ("Location: ../signup.php?signup=invalid");
             exit();
         }else{
             if(!FILTER_INPUT(INPUT_POST, 'userEmail', FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?signup=email");
                exit();
             }else{
                 $sql = "SELECT * FROM users WHERE userId ='$userId'";
                 $result = mysqli_query ($conn, $sql);
                 $resultCheck = mysqli_num_rows($result);

                 if ($resultCheck > 0){
                     header("Location: ../signup.php?signup=usertaken");
                     exit();
                 }else{
                     //securing the password
                     $hashedPwd = password_hash($userPwd, PASSWORD_DEFAULT);
                     //insert user into the database
                     $sql = "INSERT INTO users(userId, userFirst, userLast, userEmail, userPwd) 
                     VALUES ('$userId', '$userFirst', '$userLast', '$userEmail', '$hashedPwd');";

                     mysqli_query($conn, $sql);

                     header("Location: ../signup.php?signup=success");
                     exit();
                 }
             }
         }
     }
}else{
    header("Location: ../signup.php");
    exit();
};

//check that user has filled everything

    