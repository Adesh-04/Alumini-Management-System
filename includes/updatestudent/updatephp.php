<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="../../css-style/css.php">
</head>
<body>
	<h4 class="in" >Insert New Data</h4>
	<div class="box1">
	<form action="updatedata.php" method="post">
		
		<input class="uid" type="number" name="fid" placeholder="Id*">
		
		<input class="uname" type="text" name="fname" placeholder="New Name">
		
		<input class="umail" type="text" name="femail" placeholder="New Email">
		
		<input class="umobile" type="number" name="fmobile" placeholder="New Mobile">
		
		<select class="ubranch" name="fbranch">
			<option value = "" disabled selected>Branch</option>
			<option value="CS">CS</option>
			<option value="ME">ME</option>
			<option value="E&TC">E&TC</option>
			<option value="Civil">Civil</option>
			<option value="Electrical">Electrical</option>
		</select>
		
		<input class="upackage" type="number" name="fpackage" placeholder="New Package">
		
		<button class="update1">Update</button>
	</form>
		<a href="../index.php"><button class="home">Cancel</button></a>

	
</div>
</body>
</html>
	
