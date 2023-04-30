<?php 
// function emptyInputSignup($Name,$Email,$pass,$repass){

//     $result;
//     if(empty($name) || empty($Email) || empty($pass)||empty($repass) ){
//         $result=true;
//      }
//      else{
//         $result=false;
//      }
//      return $result;
// }


function InvalidEmail($Email){

   $result;
    if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        $result=true;
     }
     else{
        $result=false;
     }
     return $result;
}
function Pwdmatch($pass,$repass){

   $result;
    if($pass !== $repass){
        $result=true;
     }
     else{
        $result=false;
     }
     return $result;
}

function Emailexists($connect,$Email){

   $sql="SELECT * FROM patient WHERE Email = ? ;";
   $stmt= mysqli_stmt_init($connect);
   if(!mysqli_stmt_prepare($stmt,$sql)){
      header('location: index.php?error=stmtfailed');
        exit();
   }
   mysqli_stmt_bind_param($stmt,"s",$Email);
   mysqli_stmt_execute($stmt);
   $resultdat=mysqli_stmt_get_result($stmt);
   if($row=mysqli_fetch_assoc($resultdat)){

      return $row;
   }
   else{
      $result=false;
      return $result;
   }
   mysqli_stmt_close($stmt);
}

function createuser($connect,$Name,$age,$Email,$pass){
   $sql=" INSERT INTO patient(Name,Age,Email,Password) VALUES (?,?,?,?)";
   $stmt= mysqli_stmt_init($connect);
   if(!mysqli_stmt_prepare($stmt,$sql)){
      header('location:index.php?error=stmtfailed');
        exit();
   }
   $hasingpass=password_hash($pass,PASSWORD_DEFAULT);
   mysqli_stmt_bind_param($stmt,"ssss",$Name,$age,$Email,$hasingpass);
   mysqli_stmt_execute($stmt);
   $resultdat=mysqli_stmt_get_result($stmt);
   mysqli_stmt_close($stmt);
   header('location:index.php?error=none');
        exit();
   
   
}
function loginUser($connect,$Email,$Password){

   $Emailexist=Emailexists($connect,$Email);
   if($Emailexist === false){
      header('location: index.php?error=wronglogin');
        exit();
   }
   $pwdHashed=$Emailexist["Password"];
   $checkpwd=password_verify($Password,$pwdHashed);
   if($checkpwd === false){

      header('location: index.php?error=wrongPassword');
        exit();

   }
   else if($checkpwd === true){
      session_start();
      $_SESSION["Email"]=$Emailexists["Email"];
      $_SESSION['user_id']=$Emailexist['id'];
      header('location: home.php');
        exit();
   }
}









?>