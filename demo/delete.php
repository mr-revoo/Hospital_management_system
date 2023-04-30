<?php 
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM doctors WHERE id=$id";
    $result=mysqli_query($connect,$sql);
    if($result){
        header('location:index.php');
    }
    else{
        echo "error";
    }
}