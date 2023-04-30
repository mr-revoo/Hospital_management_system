<?php 
include 'loginscript.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
</head>
<body>
  <p>>>Connected successfully</p> 
 
    <!-- I want to print doctor name  -->
    <?php
    $docname = $_COOKIE['name'];
    ?>
     


  <h1> Hello <?php echo substr($docname,0,20)?> </h1>

</body>
</html>