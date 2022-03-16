<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<link rel="stylesheet" href="../css-style/css.php">
</head>
<body>

<div >

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
	include_once "dbh.inc.php";
	$fid = mysqli_real_escape_string($conn, $_POST["id"]);

	if($fid == false){
			?>
			<script LANGUAGE='JavaScript'>
				window. alert('Enter ID');
				window. location. href='index.php';
			</script>
			<?php
		}

	$sqld = "SELECT * FROM students WHERE id = $fid;";
	$result = mysqli_query($conn, $sqld);
	// echo $result . " result";
	$resultCheck = mysqli_num_rows($result);
	// echo $resultCheck . " result check";
	if ($resultCheck && $result) {
		while($resultCheck = mysqli_fetch_array($result)){
					?>
						
						<tr>
						<td><?php echo $resultCheck['id']; ?> </td>
						<td><?php echo $resultCheck['Name']; ?> </td>
						<td><?php echo $resultCheck['Mobile_No']; ?> </td>
						<td><span ><?php echo $resultCheck['email']; ?></span> </td>
						<td><?php echo $resultCheck['Branch']; ?> </td>
						<td><?php echo $resultCheck['Package']; ?> </td>
						

					<?php
					}
	}else{
		?>
		<script LANGUAGE='JavaScript'>
				window. alert('something went wrong, please try again');
				window. location. href='index.php';
		</script>
		<?php
	}
	
					?>

					
					</tr>
				</tbody>
				<a href="../index.php"><button class="home1">Home</button></a>
			</table>
		</div>
	</div>
</div>
</body>
</html>


