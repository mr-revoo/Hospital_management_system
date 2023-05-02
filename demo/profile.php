<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM doctors WHERE id=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$Name=$row['Name'];
$Email=$row['Email'];
$Specialization=$row['Clinic'];
$Pass=$row['Pass'];

if(isset($_POST['submit'])){
  $Name=$_POST['name'];
  $Email=$_POST['email'];
  $Specialization=$_POST['selection'];
  $Pass=$_POST['pass'];

  $sql="UPDATE doctors SET Name='$Name',Email='$Email',Clinic='$Specialization',Password='$Pass' WHERE id=$id";

  $result=mysqli_query($connect,$sql);

  if($result){
    header('location:index.php');
  }
  else{
    echo "error";
  }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  <title>Edit data</title>
</head>
<body>


<form  action="" id="addform" method="POST">
                  <input type="hidden">

                <div class="form-group">
                <label for="Nameinput">Name:</label>
                <input type="text" class="form-control" id="Nameinput" required="required"placeholder="Enter Doc's Name"name="name" autocomplete=off value=<?php echo $Name?>>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required"placeholder="Enter Doc's Email"name="email"autocomplete=off value=<?php echo $Email?>>
            </div>
            <label for="main">Specialization</label>
            <select class="form-control my-1" name="selection"value=<?php echo $Specialization?>>
            
                <option>General</option>
                <option >Cardio</option>
                <option>Neuro</option>
                <option >Dental</option>
            </select>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control my--2" id="exampleInputPassword1"required="required"placeholder="Enter Doc's Pass" name="pass"value=<?php echo $Pass?>>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-danger">Cancel</button>
        <button type="submit" class="btn btn-primary" name="submit">Save</button>

        <input type="hidden" name="action" value="adduser">
        <input type="hidden" name="usrid"  id="usrid" value="">

      </div>
            
            
            </form>
      </div>
      
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> 
<script src="js/script.js"></script>
  
</body>
</html>