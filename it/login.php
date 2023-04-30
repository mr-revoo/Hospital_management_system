<?php


if(isset($_POST['submit2'])){

    $Email=$_POST["Email"];
    $Password=$_POST["Password"];


    require_once 'Connection.php';
    require_once 'functions.php';

    if(InvalidEmail($Email)!==false){

        header('location: index.php?error=invalidloginEmail');
        exit();
    }

    

     loginUser($connect,$Email,$Password);



}
else{
    header('location: index.php');
    exit();
}