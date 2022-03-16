<!DOCTYPE html>
<html>
<head>
	<title>Remove Student</title>
	<link rel="stylesheet" type="text/css" href="../../css-style/css.php">
</head>
<body>
	<div class="box1">
	<form action="delstudent.php" method="post">
		<h4 class="id">
		<input class="iid" type="number" name="id" placeholder="Enter ID">
		<button class="delete1" type="submit" name="submit">Delete</button>
		</h4>
	</form>

	<form action="../displayos.php" method="post">
		<h4 class="id">
		<input class="iid1" type="number" name="id" placeholder="Enter ID">
		<button class="viewdata" type="submit" name="submit">View Data</button>
		</h4>
	</form>
	<a href="../index.php"><button class="home">Home</button></a>	<br>
	<a href="../findstudent/findindex.php"><button class="fid" >Find ID</button></a>

	
	</div>

</body>
</html>