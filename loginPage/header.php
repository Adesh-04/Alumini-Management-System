<?php
	session_start();
?>

<!DOCTYPE html>

<html>

<head>

	<meta charset = "utf- 8">
	<meta name = viewport content= "width = device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="../css-style/css.php">

</head>

<body>

	<header>

		<nav >
			<a  href="../index.php">
			<img style="position: fixed; top: 0px;" src = "logo3.jpg" alt="Clg logo"  height="90">
			</a>

		

			<div>
				<?php

				if(isset($_SESSION['userUid']))
				{
					echo'<form action="loginPage/logout.inc.php" method="post">
						 <button class="logout" type="submit" name="logout-submit">Logout</button>
						 </form>';

				}

				else
				{
					?>
					<div class="box1">
					<?php
					echo '<form action="loginPage/login.inc.php" method="post">
						 <input class="xuser" type="text" name="mailuid" placeholder="Username/E-mail">
						 <input class="xpass" type="password" name="pwd" placeholder="Password">
						 <button class="submit5" type="submit" name="login-submit">Login</button>
						 </form>
				
						 <br><button class="submit3"><a href="loginPage/signup.php?signup=?">Signup</a></button>';
						 ?>
						</div>
						<?php
				}

				?>
				

				

			</div>

		</nav>

	</header>

</body>
</html>