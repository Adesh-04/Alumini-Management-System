<?php
	include_once "../dbh.inc.php";
	$sid = mysqli_real_escape_string($conn, $_POST["fid"]); 
	$sname = mysqli_real_escape_string($conn, $_POST["fname"]);
	$semail = mysqli_real_escape_string($conn, $_POST["femail"]);
	$smobile = mysqli_real_escape_string($conn, $_POST["fmobile"]);
	$sbranch = mysqli_real_escape_string($conn, $_POST["fbranch"]);
	$spackage = mysqli_real_escape_string($conn, $_POST["fpackage"]);
	$sql = "UPDATE students SET Name='$sname',email='$semail', Mobile_No=$smobile, Branch='$sbranch',Package=$spackage WHERE id = $sid;";
	mysqli_query($conn, $sql);
	header("Location: ../index.php?Updated+Successfully");
?>