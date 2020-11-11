<?php
//check if someone clicked the submit button
if (isset($_POST['submit'])){
    include_once 'dbh.inc.php';
  
    $bookName= mysqli_real_escape_string ($conn, $_POST['bookName']);
    $bookAuthor =mysqli_real_escape_string ($conn, $_POST['bookAuthor']);
    $bookEdition= mysqli_real_escape_string ($conn, $_POST['bookEdition']);
    $bookCourse= mysqli_real_escape_string ($conn, $_POST['bookCourse']);

    if(empty($bookName) || empty ($bookAuthor) || empty ($bookEdition)
      ){
         header ("Location: ../book.php? book=empty");
         exit();
     }else{
        //check if input chracters are valid.
        if(!preg_match("/^[a-zA-Z]+$/", $bookName)){
             header ("Location: ../book.php?book=invalid");
             exit();
         }else{
             if(!FILTER_INPUT(INPUT_POST, 'bookEdition', FILTER_VALIDATE_INT)){
                header("Location: ../book.php?book=edition");
                exit();
             }else{
                 $sql = "SELECT * FROM books WHERE bookName ='$bookName'";
                 $result = mysqli_query ($conn, $sql);
                 $resultCheck = mysqli_num_rows($result);

                 if ($resultCheck > 0){
                     header("Location: ../book.php?book=bookalreadyinsystem");
                     exit();
                 }else{
                    
                     //insert user into the database
                     $sql = "INSERT INTO books( bookName, bookAuthor, bookEdition, bookCourse) 
                     VALUES ( '$bookName', '$bookAuthor', '$bookEdition', '$bookCourse');";

                     mysqli_query($conn, $sql);

                     header("Location: ../admin.php");
                     exit();
                 }
             }
         }
     }
}else{
    header("Location: ../book.php");
    exit();
};

//check that user has filled everything

    