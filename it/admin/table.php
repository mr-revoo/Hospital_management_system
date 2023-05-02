<table class="table table-hover">
  <thead>
    <tr class="bg-dark text-light">
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Specialization</th>
      
    </tr>
  </thead>
  <tbody>

  <?php
  require 'connect.php';
  $sql="SELECT * FROM doctors";
    $result=mysqli_query($connect,$sql);
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $Name=$row['Name'];
      $Email=$row['Email'];
      $Specialization=$row['clinic'];
      $Pass=$row['Password'];
      echo "<tr>";
      echo "<td>$id</td>";
      echo "<td>$Name</td>";
      echo "<td>$Email</td>";
      echo "<td>$Specialization</td>";
       
    }?>
    
    
      
    </tr>
  </tbody>
</table>