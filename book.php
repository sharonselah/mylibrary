<?php 
session_start();
include_once 'includes/dbh.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="includes/book.inc.php" method="POST">
          
            <label for="bookname">Book Name</label>
            <input type="text" id="bookName" name="bookName"> 
            <label for="bookauthor">Book Author</label>
            <input type="text" id="bookauthor" name="bookAuthor">
            <label for="bookedition">Book Edition</label>
            <input type="text" id="bookedition" name="bookEdition">
            <label for="bookcourse">Book Course</label>
            <input type="text" id="bookcourse" name="bookCourse">
            <input class= "button" type="submit" name="submit" value="Submit">     
       
        </form>

</body>
</html>