<?php
	include_once "../dbh.inc.php";

	$fid = mysqli_real_escape_string($conn, $_POST["id"]);

	if($fid == false){
			?>
			<script LANGUAGE='JavaScript'>
				window. alert('Enter ID');
				window. location. href='../index.php';
			</script>
			<?php
		}

	$sqld = "SELECT * FROM students WHERE id = $fid;";
	$result = mysqli_query($conn, $sqld);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0) {
		$sql = "DELETE FROM students WHERE id = $fid ;";
		mysqli_query($conn, $sql);
		if (mysqli_query($conn, $sql)) {
			?>
			<script LANGUAGE='JavaScript'>
				window. alert('Entry deleted successfully');
				window. location. href='deletestindex.php';
			</script>
			<?php
		}else{
			?>
			<script LANGUAGE='JavaScript'>
				window. alert('something went wrong, please try again');
				window. location. href='../index.php';
			</script>
			<?php
		}
	}else{
		?>
		<script LANGUAGE='JavaScript'>
			window. alert('No data found');
			window. location. href='deletestindex.php';
		</script>
		<?php
	}
	


?>



	