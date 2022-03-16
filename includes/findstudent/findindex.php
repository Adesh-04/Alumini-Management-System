<!DOCTYPE html>
<?php 	include "../dbh.inc.php"; ?>
<html>
<head>
	<title> Find</title>
	<link rel="stylesheet" href="../../css-style/css.php">
</head>
<body>
	<div class="box1">
	<form action="" method = "post">
		

			<input class="iname" type="text" name="fname" placeholder="Full Name">

			<input class="imail" type="text" name="femail" placeholder="E-mail">

			<input class="imobile" type="number" name="fmobile" placeholder="Mobile Number">

			<select class="ibranch" name="fbranch">
			<option value = "" disabled selected>Branch</option>
			<option value="CS">CS</option>
			<option value="ME">ME</option>
			<option value="E&TC">E&TC</option>
			<option value="Civil">Civil</option>
			<option value="Electrical">Electrical</option>
			</select>

			<input class="ipackage" type="number" name="fpackage" placeholder="Package Amount">

		<button class="submit4" type="submit" name="submit">Find</button>
	</form>
	<a href="../index.php"><button class="home">Home</button></a>
	</div>
</body>
</html>

 <?php
	if(isset($_POST["submit"])){


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
				
				echo "<p style='color:#161F6D ;font-family:cursive; font-weight:900 ; font-size:20px; position:relative; left: 400px; bottom: 60px;'> Your ID is:</p>". "<p style='color:#161F6D; font-weight= 900; font-size:20px; font-family:cursive; position:relative; left:530px; bottom: 107px;'>". $row["id"] . "<br>";  

						
			}
		}else{
				?>
				<script>
					alert("data not found")
				</script>
				<?php
		}


		

		
	}
	
?> 
