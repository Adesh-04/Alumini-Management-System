<?php
	include_once "../dbh.inc.php";
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
				echo $row["id"] . "<br>"  ;
			}
		else{
			?>
			<script>
				alert("Data Not Found!!")
			</script>
			<?php
		}
		if($result){
			?>
			<script>
				alert("data inserted properly ")
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert("data not inserted ")
			</script>
			<?php
	}	

		}
	}
?>