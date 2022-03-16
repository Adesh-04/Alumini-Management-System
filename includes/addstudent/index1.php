<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
    <link rel="stylesheet" type="text/css" href="../../css-style/css.php">

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

		<button class="submit" type="submit" name="submit">Register</button>
	</form>
	<a href="../index.php"><button class="home">Home</button></a>
	</div>
</body>
</html>

<?php
	include_once '../dbh.inc.php';

	if(isset($_POST['submit'])){

		$sname = $_POST['fname'];
		$smobile = $_POST['fmobile'];
		$semail = $_POST['femail'];
		$sbranch = $_POST['fbranch'];
		if($sbranch == false){
			?>
			<script LANGUAGE='JavaScript'>
				window. alert('Invalid data');
				window. location. href='index1.php';
			</script>
			<?php
		}	
		$spackage = $_POST['fpackage'];

if(empty($sname)){
	?>
	<script>
		alert('Enter Data');
	</script>
	
	<?php
}

elseif(strlen($sname) <=3){
	?>
	<script>
		alert('Name Too Short');
	</script>
	
	<?php
}

elseif(str_contains($sname, '0') == true){
?>
	<script>
		alert('Enter Valid Name');
	</script>
	
	<?php
}
elseif(str_contains($sname, '1') == true){
?>
	<script>
		alert('Enter Valid Name');
	</script>
	
	<?php
}
elseif(str_contains($sname, '2') == true){
	?>
	<script>
		alert('Enter Valid Name');
	</script>
	
	<?php
}
elseif(str_contains($sname, '3') == true){
?>
	<script>
		alert('Enter Valid Name');
	</script>
	
	<?php
}
elseif(str_contains($sname, '4') == true){
?>
	<script>
		alert('Enter Valid Name');
	</script>
	
	<?php
}
elseif(str_contains($sname, '5') == true){
?>
	<script>
		alert('Enter Valid Name');
	</script>
	
	<?php
}
elseif(str_contains($sname, '6') == true){
?>
	<script>
		alert('Enter Valid Name');
	</script>
	
	<?php
}
elseif(str_contains($sname, '7') == true){
?>
	<script>
		alert('Enter Valid Name');
	</script>
	
	<?php
}
elseif(str_contains($sname, '8') == true){
?>
	<script>
		alert('Enter Valid Name');
	</script>
	
	<?php
}
elseif(str_contains($sname, '9') == true){
?>
	<script>
		alert('Enter Valid Name');
	</script>
	
	<?php
}


elseif(str_contains($semail, "@") !== true){
?>
	<script>
		alert('Enter Valid1 Mail');
	</script>
	
	<?php
}

elseif(str_contains($semail, ".com") !== true){
?>
	<script>
		alert('Enter Valid Mail');
	</script>
	
	<?php
}

elseif(strlen($smobile) <=9){
	?>
	<script>
		alert('Enter Valid Number');
	</script>
	
	<?php
}

elseif(strlen($smobile) >=11){
	?>
	<script>
		alert('Enter Valid Number');
	</script>
	
	<?php
}

elseif(empty($smobile)){
?>
	<script>
		alert('Enter Number');
	</script>
	
	<?php
}



elseif(empty($spackage)){
	?>
	<script>
		alert('Enter Package');
	</script>
	
	<?php
}

else{


		$sql = "INSERT INTO students( Name,Mobile_No,email,Branch,Package) VALUES ('$sname',$smobile,'$semail','$sbranch',$spackage) ;";

		$che =  mysqli_query($conn,$sql);

		if($che){
			?>
			<script>
				alert("Student Registered")
			</script>
			<?php
		}
		else{
			?>
			<script LANGUAGE='JavaScript'>
			window. alert('Invalid data3');
			window. location. href='index1.php';
		</script>
			<?php
	}	
}
}

?>
