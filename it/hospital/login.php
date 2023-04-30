<?php 

$conn = mysqli_connect("localhost" , "root", "", "shopping");
session_start();

if(isset($_POST['submit'])){
     
     
  $account =$_POST['email'];
  $password= $_POST['password'];
  $username = $_POST['username'];



$sql= " SELECT * FROM accounts WHERE account = '$account' && password = '$password' && username = '$username'";
$result = mysqli_query($conn, $sql);


if(mysqli_fetch_assoc($result)){
  $_SESSION['username'] = $username;
  header('location: main.php');
  
}else{
      $error[]= 'user does not exist or password is wrong';
      mysqli_close($conn);

  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login page</title>
    <link rel="stylesheet" type="text\css" href="style.index.css" />
  
  <style>
* {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 overflow-y: auto; 
overflow-x: auto;
 
}

body {
 background-color: mintcream;
 font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.header{
 font-style: normal;
 max-width: 700px;
 margin: 100px;
 padding: 20px;
 background-color: cornflowerblue;
 border-radius: 10px;
 box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
}

.container {
 max-width: 700px;
 margin:  100px;
 padding: 50px;
 background-color: cornflowerblue;
 border-radius: 10px;
 box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
}

h1 {
 text-align: center;
 margin-bottom: 10px;
 font-size: 200%;
 font-weight: bold;
 color: darkblue;
 font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
}

form {
 display: flex;
 flex-direction: column;
}

label {
  font-size: 150%;
 font-weight: bold;
 color: darkblue;
 font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;

}

input[type="text"], input[type="email"], input[type="password"], select {
 padding: 15px;
 margin-bottom: 10px;
 border-radius: 5px;
 border: none;
 background-color: #EFEEEE; 
 text-align: center;
 cursor: pointer; 
 font-size: 100%;
 font-weight: bold;
 color: grey;
 font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

input[type="submit"] {
 background-color: darkblue; 
 color: aliceblue; 
 padding: 12px 20px; 
 border: hidden; 
 border-radius: 4px; 
 cursor: pointer; 
 font-size: 150%;
 font-weight: bold;
 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
 margin-top: 20px;
 
}
p {
font-size: 150%;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
 text-align:center;
 margin-top:20px;
 color: #EFEEEE;
 
}

  </style>
    
  </head>
  
  <body>

    <div class = "header" > 
    <h1> Enter your account </h1>
</div>
<div>
  <img src="shop.jpg">
</div>
  <!-- login form  -->
  <div class="container">
  <form action="#" method="post">
      <label for="Username">Username:</label><br>
      <input type="text" name="username"  placeholder="Enter Your Username" required>

      <label for="Email">Email:</label><br>
      <input type="email" name="email"  placeholder="Enter Your Account" required>

      <label for="Password">Password:</label><br>
      <input type="password" name="password" placeholder="Enter Your Password" required>

      <input type="submit" name = "submit" value="Login"><br>
    <p>Don't have an account <a href="register.php">Sign-up</a></p>
    </div>

    </form>

    <br><br><br>

  </body>
</html>
