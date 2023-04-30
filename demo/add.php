<?php


require 'connect.php';
include_once 'useradd.php';
if(isset($_POST['submit'])){
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Specialization=$_POST['selection'];
    $Pass=$_POST['pass'];
    

    // if(emptyInputSignup($Name,$Email,$pass,$repass)!==false){

    //     header('location: index.php?error=emptyinput');
    //     exit();
    // }
    if(InvalidEmail($Email)!==false){

        header('location: index.php?error=invalidsignupEmail');
        exit();
    }
    if(Emailexists($connect,$Email)!==false){

        header('location: index.php?error=3');
        exit();
    }
    createuser($connect,$Name,$Email,$Specialization,$Pass);
    
    // $query="INSERT INTO register VALUES('$Name','$Email','$pass','$repass')";
    // mysqli_query($connect,$query);
    // header('Location: index.php');


        }

    