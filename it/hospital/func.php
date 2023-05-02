<?php 
require_once 'Connection.php';

if(isset($_POST['confirm'])){

    $appid=$_POST['appid'];
    $sql="UPDATE appointments SET isverified= 1 WHERE appid = $appid;";
    $result= mysqli_query($connect,$sql);
    if($result){
        
        echo "<script>alert('Appointment Confirmed')</script>";
        header('Location: patient-profile.php');
    }
}else if(isset($_POST['cancel'])){
    $appid=$_POST['appid'];
    $sql="DELETE FROM appointments WHERE appid = $appid;";
    $result= mysqli_query($connect,$sql);
    if($result){
        
        echo "<script>alert('Appointment Canceled')</script>";
        header('Location: patient-profile.php');
    }
}




  