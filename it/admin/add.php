<?php


require 'connect.php';

if(isset($_POST['submit'])){
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Specialization=$_POST['selection'];
    $Pass=$_POST['pass'];


    $sql=" INSERT INTO `doctors`(`Name`,`Email`,`clinic`,`Password`) VALUES (?,?,?,?)";
    $stmt= mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header('location:patient-profile.php?error=stmtfailed');
         exit();
    }
    $hasingpass=password_hash($Pass,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$Name,$Email,$Specialization,$hasingpass);
    mysqli_stmt_execute($stmt);
    $resultdat=mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    header('location:patient-profile.php?error=none');
         exit();

    
}
?>