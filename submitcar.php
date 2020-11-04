<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor ="#FFFFFF" text="#000000">

<?php

/*$firstName = $_POST['firstName'];
$secondName = $_POST['secondName'];
$streetAddress = $_POST['streetAddress'];
$city = $_POST['city'];
$box = $_POST['box'];

 for ($i = 1; $i<=$box; $i++){
     echo "Box ". $i. " of ". $box;
     echo "<br/>";
 }*/

 $itemNumber = $_POST['itemNumber'];
 $description = $_POST ['description'];
 $originalPrice = $_POST ['originalPrice'];


 for ($i =1; $i<=7; $i++){

    $originalPrice = $originalPrice *0.9;
     echo "On day ". $i." the price is ".$originalPrice;
     echo "<br/>";

     }
?>
    
</body>
</html>