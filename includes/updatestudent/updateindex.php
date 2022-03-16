<!DOCTYPE html>
<html>
<head>
	<title>Update data</title>
	<link rel="stylesheet" type="text/css" href="../../css-style/css.php">

</head>
<body>
	<h4 class="in"> Insert the Data To be Updated</h4>
	<div class="box1">
	<form action="findupdate.php" method="post">
		

			<input class="iname" type="text" name="fname" placeholder="Name">

			<input class="imail" type="text" name="femail" placeholder="Email">

			<input class="imobile" type="number" name="fmobile" placeholder="Mobile Number">

			<select class="ibranch" name="fbranch">
			<option value = "" disabled selected>Branch</option>
			<option value="CS">CS</option>
			<option value="ME">ME</option>
			<option value="E&TC">E&TC</option>
			<option value="Civil">Civil</option>
			<option value="Electrical">Electrical</option>
			</select>

			<input class="ipackage" type="number" name="fpackage" placeholder="Package">

		<button class="submit">Update</button>
	</form>
	<a href="../index.php"><button class="home">Home</button></a>
	</div>
</body>
</html>