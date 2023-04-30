<table class="table table-hover">
  <thead>
    <tr class="bg-dark text-light">
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Specialization</th>
      <th scope="col">operations</th>
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
      $Specialization=$row['Specialization'];
      $Pass=$row['Password'];
      echo "<tr>";
      echo "<td>$id</td>";
      echo "<td>$Name</td>";
      echo "<td>$Email</td>";
      echo "<td>$Specialization</td>";
      echo "<td>
      <a href='#'class='mr-3 profile' data-target='#userviewmodal' data-toggle='modal' title='View Profile'><i class='fa-solid fa-eye' style='color: #06891c;'></i></a>
      <a href='profile.php?updateid=".$id."'class='mr-3 edituser'data-target='#usereditmodal' title='edit Profile'><i class='fa-solid fa-pen'></i></a>
      <a href='delete.php?deleteid=".$id."' class='mr-3 deluser'data-target='#userdelmodal'title='delete Profile'><i class='fa-solid fa-trash' style='color: #8b1818;'></i></a>";}
  
  ?>
    
    
      
    </tr>
  </tbody>
</table>