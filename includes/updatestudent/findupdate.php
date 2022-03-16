<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="../../css-style/css.php">
</head>
<body>
	<div >

		<div >
			<table class="content-table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Branch</th>
						<th>Package</th>
						
					</tr>
				</thead>

				<tbody>

	<?php
		include "../dbh.inc.php";
		$sname = mysqli_real_escape_string($conn, $_POST["fname"]);
		$semail = mysqli_real_escape_string($conn, $_POST["femail"]);
		$smobile = mysqli_real_escape_string($conn, $_POST["fmobile"]);
		$sbranch = mysqli_real_escape_string($conn, $_POST["fbranch"]);
		$spackage = mysqli_real_escape_string($conn, $_POST["fpackage"]);

		$sqld = "SELECT * FROM students WHERE Name = '$sname'AND email = '$semail'AND Mobile_No = $smobile AND Branch = '$sbranch' AND Package = $spackage;";
		$result = mysqli_query($conn, $sqld);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<p style='position:fixed; top:10px; left:50px; font-weight:900; font-size:30px; color:#161F6D;'>"."The data you want to edit: <br>";
				?>
						
						<tr>
						<td><?php echo $row['id']; ?> </td>
						<td><?php echo $row['Name']; ?> </td>
						<td><?php echo $row['Mobile_No']; ?> </td>
						<td><?php echo $row['email']; ?></span> </td>
						<td><?php echo $row['Branch']; ?> </td>
						<td><?php echo $row['Package']; ?> </td>
					</tr>
						</tbody>
						<a href="../index.php"><button class="home1">Home</button></a></table></div>

					<?php
				}

			include_once "update.html";
			echo "<br>" . "<br>" ."<p style='position:fixed; color:#161F6D; left:10%; top:250px; font-weight:900; font-size:20px;'> ". "Do you want to Edit:";

			}
		else{
			?>
			<script LANGUAGE='JavaScript'>
				window. alert('Invalid data');
				window. location. href='updateindex.php';
			</script>
			<?php
			
		}

		
	
	?>
</div>
</body>
</html>
