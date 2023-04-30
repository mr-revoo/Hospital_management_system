<!DOCTYPE html>
<html>
<head>
	<title>Hospital Admin</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<header>
		<h1>Hospital Admin Dashboard</h1>
		<nav>
			<ul>
				<li><a href="#dashboard">Dashboard</a></li>
				<li><a href="#doctors">Doctors</a></li>
				<li><a href="#patients">Patients</a></li>
				<li><a href="#appointments">Appointments</a></li>
				<li><a href="#add-doctor">Add Doctor</a></li>
				<li><a href="#feedbacks">Feedbacks</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section id="dashboard">
			<h2>Dashboard</h2>
			<!-- Display dashboard information -->
		</section>
		<section id="doctors">
			<h2>Doctors</h2>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Specialization</th>
						<th>Phone</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php
						// Connect to MySQL database
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "hospital";
						$conn = new mysqli($servername, $username, $password, $dbname);
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}

						// Get doctor list
						$sql = "SELECT * FROM doctors";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<tr>";
								echo "<td>" . $row["id"] . "</td>";
								echo "<td>" . $row["name"] . "</td>";
								echo "<td>" . $row["specialization"] . "</td>";
								echo "<td>" . $row["phone"] . "</td>";
								echo "<td>" . $row["email"] . "</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan='5'>No doctors found</td></tr>";
						}

						// Close MySQL connection
						$conn->close();
					?>
				</tbody>
			</table>
		</section>
		<section id="patients">
			<h2>Patients</h2>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
					</tr>
				</thead>
				<tbody>
					<?php
						// Connect to MySQL database
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "hospital";
						$conn = new mysqli($servername, $username, $password, $dbname);
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}

						// Get patient list
						$sql = "SELECT * FROM patients";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<tr>";
								echo "<td>" . $row["id"] . "</td>";
								echo "<td>" . $row["name"] . "</td>";
								echo "<td>" . $row["email"] . "</td>";
								echo "<td>" . $row["phone"] . "</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan='4'>No patients found</td></tr>";
						}

						// Close MySQL connection
						$conn->close();
					?>
				</tbody>
			</table>
		</section>
		<section id="appointments">
			<h2>Appointments</h2>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Patient Name</th>
						<th>Doctor Name</th>
						<th>Date</th>
						<th>Time</th>
					</tr>
				</thead>
				<tbody>
					<?php
						// Connect to MySQL database
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "hospital";
						$conn = new mysqli($servername, $username, $password, $dbname);
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}

						// Get appointment list
						$sql = "SELECT a.id, p.name as patient_name, d.name as doctor_name, a.date, a.time FROM appointments a JOIN patients p ON a.patient_id = p.id JOIN doctors d ON a.doctor_id = d.id";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<tr>";
								echo "<td>" . $row["id"] . "</td>";
								echo "<td>" . $row["patient_name"] . "</td>";
								echo "<td>" . $row["doctor_name"] . "</td>";
								echo "<td>" . $row["date"] . "</td>";
								echo "<td>" . $row["time"] . "</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan='5'>No appointments found</td></tr>";
						}

						// Close MySQL connection
						$conn->close();
					?>
				</tbody>
			</table>
		</section>
		<section id="add-doctor">
			<h2>Add Doctor</h2>
			<form method="post" action="add_doctor.php">
				<label>Name</label>
				<input type="text" name="name" required>
				<label>Specialization</label>
				<input type="text" name="specialization" required>
				<label>Phone</label>
				<input type="text" name="phone" required>
				<label>Email</label>
				<input type="email" name="email" required>
				<input type="submit" value="Add Doctor">
			</form>
		</section>
		<section id="feedbacks">
			<h2>Feedbacks</h2>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Patient Name</th>
						<th>Doctor Name</th>
						<th>Feedback</th>
					</tr>
				</thead>
				<tbody>
					<?php
						// Connect to MySQL database
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "hospital";
						$conn = new mysqli($servername, $username, $password, $dbname);
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}

						// Get feedback list
						$sql = "SELECT f.id, p.name as patient_name, d.name as doctor_name, f.feedback FROM feedbacks f JOIN patients p ON f.patient_id = p.id JOIN doctors d ON f.doctor_id = d.id";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<tr>";
								echo "<td>" . $row["id"] . "</td>";
								echo "<td>" . $row["patient_name"] . "</td>";
								echo "<td>" . $row["doctor_name"] . "</td>";
								echo "<td>" . $row["feedback"] . "</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan='4'>No feedbacks found</td></tr>";
						}

						// Close MySQL connection
						$conn->close();
					?>
				</tbody>
			</table>
		</section>
	</main>
</body>
</html>
