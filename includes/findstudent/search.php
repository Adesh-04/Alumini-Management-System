<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="../../css-style/css.php">
</head>
<body>
<div>
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

<?php
include "../dbh.inc.php";

$sid = $_POST["fid"];

if($sid == false){
			?>
			<script LANGUAGE='JavaScript'>
				window. alert('Enter ID');
				window. location. href='../display.php';
			</script>
			<?php
		}
$sqld = "SELECT * FROM students WHERE id = $sid ;";
$result = mysqli_query($conn, $sqld);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
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
		</table>
			<a href="../index.php"><button class="home1">Home</button></a>
			
		</div>
		<?php
	}else{
		?>
		<script LANGUAGE='JavaScript'>
			window. alert("ID Doesn't Exist");
			window. location. href='../display.php';
		</script>
		<?php
	}
?>
</body>
</html>