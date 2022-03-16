<!DOCTYPE html>
<html>
<head>
	<title>Students Data</title>
	<link rel="stylesheet" href="../css-style/css.php">
</head>
<body>

<div >
	

	<div >
		<form class="search" action="findstudent/search.php" method="post">
			<input class="isearch" name="fid" type="search" placeholder="Search ID">
			<button class="submit1" name="submit" type="submit"> Search </button>
			</form>


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
	include_once "../includes/dbh.inc.php";

	$sqld = "SELECT * FROM students;";
	$result = mysqli_query($conn, $sqld);
	while($row = mysqli_fetch_array($result)){
					?>
						
						<tr>
						<td><?php echo $row['id']; ?> </td>
						<td><?php echo $row['Name']; ?> </td>
						<td><?php echo $row['Mobile_No']; ?> </td>
						<td><?php echo $row['email']; ?></span> </td>
						<td><?php echo $row['Branch']; ?> </td>
						<td><?php echo $row['Package']; ?> </td>
						

					<?php
					}

					?>

					
					</tr>
				</tbody>
				<a href="index.php"><button class="home1">Home</button></a>
			</table>
		</div>
	</div>
</div>
</body>

