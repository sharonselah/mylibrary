<?php
session_start();
//check if someone clicked the submit button
if (isset($_POST['submit'])){
    include_once 'dbh.inc.php';
    $userId= mysqli_real_escape_string ($conn, $_POST['userId']);
    $userPwd= mysqli_real_escape_string ($conn, $_POST['userPwd']);

    if(empty($userId) ||  empty ($userPwd) ){
        header ("Location: ../login.php?login=empty");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE userId = '$userId'";
        $result = mysqli_query ($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck < 1){
            header ("Location: ../login.php?login=errors");
            exit();
        }else{
            if ($row = mysqli_fetch_assoc($result)){
                //De-hashing the password
                $hashedPwdCheck = password_verify($userPwd, $row['userPwd']);

                if($hashedPwdCheck == false){
                    header ("Location: ../login.php?login=errorf");
                    exit();
                }elseif($hashedPwdCheck == true){
                    //log in the user here
                    $_SESSION['userId']= $row['userId'];
                    $_SESSION['userFirst']= $row['userFirst'];
                    $_SESSION['userLast']= $row['userLast'];
                    $_SESSION['userEmail']= $row['userEmail'];
                    header ("Location: ../admin.php");
                    exit();
                   
                }
            }
        }
    }      
}
else{
        header ("Location: ../login.php?login=errort");
        exit();
}