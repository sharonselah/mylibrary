<?php 
include_once 'includes/dbh.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/mylibrary./style3.css">
</head>
<body>

<div class="container">

<div class="sidepanel">
  <h1>ADMIN</h1>

  <p><a href="#mainpanel">Books</a></p>
  <p><a href="#addstudents">Students</a></p>
  <p><a href="#">Profile</a></p>
  <p><a href="#">Settings</a></p>
</div>


<div id="mainpanel">
  <a id="addbook" href="book.php">Add Book</a>
<?php
$sql = "SELECT* FROM books;";
$result = mysqli_query ($conn, $sql);
$resultCheck = mysqli_num_rows($result);
//how to represent this in a table. 

echo "<table class='last' style ='text-align:center; width:100%; border: 1px solid black;'> <tr>";
echo "<th class='row'style ='width:8%'> Book Id </th>";
echo "<th class='row'style ='width:30%'> Book Name </th>";
echo "<th class='row'style ='width:15%'> Author</th>";
echo "<th class='row'style ='width:5%'> Edition</th>";
echo "<th class='row'style ='width:8%'> Course </th>";
echo "<th class='row'style ='width:12%'> Actions </th>";
echo "<th class='row'style ='width:15%'> Actions </th>";
echo "</tr>\n";
if($resultCheck > 0){
    while ($row=mysqli_fetch_assoc($result)){
     
        echo "<tr>";
        echo "<td class='row'>" .$row ['bookId'].".". "</td>";
        echo "<td class='row'>" .$row ['bookName']. "</td>";
        echo "<td class='row'>" .$row ['bookAuthor']. "</td>";
        echo "<td class='row'>" .$row ['bookEdition']. "</td>";
        echo "<td class='row'>" .$row ['bookCourse']. "</td>";
        echo "<td class='row'>" ?>  <a style='padding: 0.2em 0.3em; text-transform' href="book.php">Edit Book</a> <?php "</td>";
        echo "<td class='row'>" ?>  <a style='padding: 0.2em 0.3em; text-transform' href="book.php">Delete Book</a> <?php "</td>";
        echo "</td></tr>\n";
    }
}
?>
</div> 

</body>
</html>