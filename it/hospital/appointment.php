
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/appointment.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>appointment</title>

</head>
<body>
  <header class="header">
  <a href="#" class="logo"><i class="fa-solid fa-calendar-check " style="color: #1f2e88;"></i> Appointment</a>
<nav class="navbar">
  <a href="../home.php">Home</a>
  <a href="#About">About </a>
  <a href="#Services">Services</a>
  <a href="#Team">Team</a>
  <a href="#Pircing">Pircing </a>
  <a href="#Blog">Blog</a>
</nav>
<a href="#" class="btn">Make Appointment</a>
<div id="menu-btn" class="fas fa-bars"></div>
  </header>
<section class="contact" id="contact" >
  <h1 class="heading"> Make appointment</h1>
  <form action="" method="post">
 <span>  Name :</span>
<div class="inputbox">
  <input type="text" placeholder="First Name " required> 
<input type="text" placeholder="Last Name" required> 
</div>
<span>  Email :</span>
<br>
<input type="email" placeholder="Enter Your Email"class="box"required>
<br>
<span> Phone Number : </span>
<br>
<input type="text" placeholder="Enter Your Phone Number" class="box" required>
<br>

<span> Appointment Date :</span>
<input type="datetime-local" class="box" required>
<br>
<span> Clinic : </span>
<br> <br>
<div class="select">
<select name="Clinic" id="med" >
   <option selected disabled > Choose Clinic : </option>
  <option value="clinic1">General</option>
  <option value="clinic2">Dental</option>
  <option value="clinic3">Radiology</option>
  <option value="clinic4">pediatric</option>
  <option value="clinic5">Emergency</option>

 

</select>
<select name="Doctors" id="med2"style="margin-left: 52px;">
  <option selected disabled > Choose doctor : </option>

</select>
</div>
<br>
<input type="submit" value="Make appointment" class="btn">

</section>
<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>address</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa ex placeat.</p>
          <div class="share">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-linkedin"></a>
              <a href="#" class="fab fa-instagram"></a>
          </div>
      </div>

      <div class="box">
          <h3>e-mail</h3>
          <a href="#" class="link">judy0zox@gmail.com</a>
          <a href="#" class="link">zoxjudy@gmail.com</a>
      </div>

      <div class="box">
          <h3>call us</h3>
          <p>+20 1111004446</p>
          <p>+20 1150489680</p>
      </div>

      <div class="box">
          <h3>opening hours</h3>
          <p>monday - friday : 8:00 - 24:00 <br>
              saturday : 9:00 - 24:00
          </p>
      </div>

  </div>

  <div class="credit">created by <span>our team</span> | all rights reserved!</div>

</section>
</form>

</body>
</html> 
