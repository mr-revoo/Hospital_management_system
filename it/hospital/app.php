<?php 
require 'Connection.php';


$usrid=$_COOKIE['userid'];
$usrname=$_COOKIE['Name'];
$usrEmail=$_COOKIE['Email'];
$phone=$_COOKIE['phone'];
$clinic=$_COOKIE['clinic'];
$date=$_COOKIE['date'];


if(isset($_POST['submit2'])){

  $doc=$_POST['doctor'];
    $sql="INSERT INTO appointments (pid,Pname,Pemail,Phone,clinic,doctor,appdate) VALUES('$usrid','$usrname','$usrEmail','$phone','$clinic','$doc','$date');";
   $result= mysqli_query($connect,$sql);
printf("error: %s\n", mysqli_error($connect));

   if($result){
       header('Location: ../home.php');
       
}

// $sql="INSERT INTO appointments(pid,Pname,Pemail,Phone,clinic,doctor,appdate) VALUES(?,?,?,?,?,?,?);";
//    $stmt= mysqli_stmt_init($connect);
//    if(!mysqli_stmt_prepare($stmt,$sql)){
//       header('location:index.php?error=stmtfailed');
//         exit();
//    }
//   mysqli_stmt_bind_param($stmt,"sssssss",$usrid,$usrname,$usrEmail,$phone,$clinic,$doc,$date);
   
//    mysqli_stmt_execute($stmt);
//    $resultdat=mysqli_stmt_get_result($stmt);
//    mysqli_stmt_close($stmt);
//    header('location:../home.php?error=none');
//         exit();
   
   
}




