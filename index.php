<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css-style/css.php">
</head>
<body>

</body>
</html>
<?php
	include_once "loginPage/header.php";
?>

	<main>
		<div>
				<?php

				if(isset($_SESSION['userUid']))
				{
					echo '<p style="font-size: 20px; color:#161F6D; position: fixed; left:20px; bottom: 470px; ">you are logged in!</p>';

				}

				

				?>
				
			</section>
		</div>
	</main>

<?php

?>