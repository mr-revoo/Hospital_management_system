<?php 

require 'Connection.php';
include_once 'functions.php';
if(isset($_POST['submit'])){
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $pass=$_POST['Password'];
    $repass=$_POST['repass'];
    $age=$_POST['age'];

    // if(emptyInputSignup($Name,$Email,$pass,$repass)!==false){

    //     header('location: index.php?error=emptyinput');
    //     exit();
    // }
    if(InvalidEmail($Email)!==false){

        header('location: index.php?error=invalidsignupEmail');
        exit();
    }
    if(Pwdmatch($pass,$repass)!==false){

        header('location: index.php?error=PasswordsDoesnotmatch');
        exit();
    }
    if(Emailexists($connect,$Email)!==false){

        header('location: index.php?error=3');
        exit();
    }
    createuser($connect,$Name,$age,$Email,$pass);
    // $query="INSERT INTO register VALUES('$Name','$Email','$pass','$repass')";
    // mysqli_query($connect,$query);
    // header('Location: index.php');


        }

    
		

    

   
    





