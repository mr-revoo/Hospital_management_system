<?php
require '../Connection.php';
require '../functions.php';
session_start();
$userid=$_SESSION['user_id'];
if(!isset($_SESSION['user_id'])){
	header('location: ../index.php');
	exit();
}
$sql="SELECT * FROM patient WHERE id='$userid'";
if($result=mysqli_query($connect,$sql)){
$fetch=mysqli_fetch_assoc($result);
							}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile Data</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css2/style.css">
</head>
<body>
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">Account Settings</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="img/img1.jpg" alt="Image" class="shadow">
						</div>
						<h4 class="text-center"><?php echo $fetch['Name'] ?></h4>
					</div>
					
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Account 
						</a>
						<a class="nav-link" id="accedit-tab" data-toggle="pill" href="#accountedit" role="tab" aria-controls="accedit" aria-selected="false">
							<i class="fa fa-home text-center mr-1"></i> 
							Account edit
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Vertification
						</a>
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i> 
							Appointment History
						</a>
						
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<div class="row">
							<?php
							
								?>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>First Name</label>
								  	<input type="text" class="form-control" value="<?php echo $fetch['Name'] ?>" disabled>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Age</label>
								  	<input type="text" class="form-control" value="<?php echo $fetch['Age']?>" disabled>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" value="<?php echo $fetch['Email'] ?>" disabled>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Phone number</label>
								  	<input type="text" class="form-control" value="+91 9876543215" disabled>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>BloofType</label>
								  	<select name="bt" class="form-control" disabled >
                      <option value="A+">A+</option>  
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>  
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>


                    </select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Designation</label>
								  	<input type="text" class="form-control" value="UI Developer" disabled>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								  	<label>Bio</label>
									<textarea class="form-control" rows="4" disabled>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vero enim error similique quia numquam ullam corporis officia odio repellendus aperiam consequatur laudantium porro voluptatibus, itaque laboriosam veritatis voluptatum distinctio!</textarea>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>

					<div class="tab-pane fade " id="accountedit" role="tabpanel" aria-labelledby="accedit-tab">
						<h3 class="mb-4">Account editdata</h3>
						<div class="row">
							<div class="col-md-6">
								<form action="" method="post">
									<div class="form-group">
										<label>First Name</label>
										<input type="text" class="form-control" value="<?php echo $fetch['Name']?>" name="name">
								  </div>
							  </div>
							  <div class="col-md-6">
								  <div class="form-group">
										<label>Age</label>
										<input type="text" class="form-control" value="<?php echo $fetch['Age']?>">
								  </div>
							  </div>
							  <div class="col-md-6">
								  <div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" value="<?php echo $fetch['Email']?>"name="Email">
								  </div>
							  </div>
							  <div class="col-md-6">
								  <div class="form-group">
										<label>Phone number</label>
										<input type="text" class="form-control" value="+91 9876543215">
								  </div>
							  </div>
							  <div class="col-md-6">
								<div class="form-group">
								  	<label>BloodType</label>
								  	<select name="bt" class="form-control" >
                      <option value="A+">A+</option>  
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>  
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                       

                    </select>
								</div>
							</div>
							  <div class="col-md-6">
								  <div class="form-group">
										<label>Designation</label>
										<input type="text" class="form-control" value="UI Developer">
								  </div>
							  </div>
							  <div class="col-md-12">
								  <div class="form-group">
										<label>Bio</label>
									  <textarea class="form-control" rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vero enim error similique quia numquam ullam corporis officia odio repellendus aperiam consequatur laudantium porro voluptatibus, itaque laboriosam veritatis voluptatum distinctio!</textarea>
								  </div>
							  </div>
						  </div>
						  <div>
							  <button class="btn btn-primary">Update</button>
							  <button class="btn btn-light"data-dismiss="modal">Cancel</button>
						  </div>
					  </div>

								</form>
								
						
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Vertify Your Appointment</h3>
						<div class="row">
							<div class="col-md-3">
              <div class="card" style="width: 50rem;">
                <div class="card-body">
                  <h5 class="card-title">Vertification</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Patient</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Confirm</a>
                        <a href="#" class="card-link">Cancel</a>
                      </div>
              </div>
								
							</div>
						</div>
						
					</div>
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-8">Appointment Table</h3>
						<div class="row">
							<div class="col-md-12">
              <table class="table table-hover"style="width: 50rem;">
              <thead>
                 <tr>
                  <th scope="col">id</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
                    </div>
						</div>
						
					</div>
					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<h3 class="mb-4">Application Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="app-check">
										<label class="form-check-label" for="app-check">
										App check
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
										<label class="form-check-label" for="defaultCheck2">
										Lorem ipsum dolor sit.
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Notification Settings</h3>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification1">
								<label class="form-check-label" for="notification1">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium accusamus, neque cupiditate quis
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification2" >
								<label class="form-check-label" for="notification2">
									hic nesciunt repellat perferendis voluptatum totam porro eligendi.
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification3" >
								<label class="form-check-label" for="notification3">
									commodi fugiat molestiae tempora corporis. Sed dignissimos suscipit
								</label>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>