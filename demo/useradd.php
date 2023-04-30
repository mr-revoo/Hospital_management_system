<?php



function createuser($connect,$Name,$Email,$Specialization,$Pass){
    $sql=" INSERT INTO `doctors`(`Name`,`Email`,`Specialization`,`Password`) VALUES (?,?,?,?)";
    $stmt= mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header('location:index.php?error=stmtfailed');
         exit();
    }
    $hasingpass=password_hash($Pass,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$Name,$Email,$Specialization,$hasingpass);
    mysqli_stmt_execute($stmt);
    $resultdat=mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    header('location:index.php?error=none');
         exit();
    
    
 }

 function Emailexists($connect,$Email){

    $sql="SELECT * FROM doctors WHERE Email = ? ;";
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


 

    






function getrows($start=0,$limit=10){
    $sql="SELECT * FROM doctors LIMIT $start,$limit";
    $result=mysqli_query($connect,$sql);
    $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $rows;
}




function getrow($id){
    $sql="SELECT * FROM doctors WHERE id=$id";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
}

function getCount(){

    $sql="SELECT COUNT(*) AS count FROM doctors";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
    return $row['count'];



}
?>