<link rel="stylesheet" href="../css-style/css.php">

	<main>
		<h1 class="in" style="color:#161F6D;">Sign up</h1>
				

		<div class="box1">
			<section >
				<?php
				if(isset($_GET['error']))
				{
					if($_GET['error'] == "emptyfields")
					{
						echo '<p class="in1">Fill in all fields</p>';
					}
					else if($_GET['error'] == "invaliduidmail")
					{
						echo '<p class="in1">Invalid username and e-mail</p>';
					}
					else if($_GET['error'] == "invaliduid")
					{
						echo '<p class="in1>Invalid username</p>';
					}
					else if($_GET['error'] == "invalidmail")
					{
						echo '<p class="in1>Invalid e-mail</p>';
					}
					else if($_GET['error'] == "passwordcheck")
					{
						echo '<p class="in1>Your passwords do not match</p>';
					}
					else if($_GET['error'] == "usertaken")
					{
						echo '<p class="in1>Username already taken</p>';
					}
				}
				else if ($_GET['signup'] == "success")
				{
					echo '<p class="in1>Sign up successful</p>';
				}

				?>
				<form action="signup.inc.php" method="post">	
					<input class="xuser" type="text" name="uid" placeholder="Username">
					<input class="xmail" type="text" name="mail" placeholder="E-mail">
					<input class="xpass" type="password" name="pwd" placeholder="Password">
					<input class="xpass1" type="password" name="pwd-repeat" placeholder="Confirm Password">
					<button class="submit2" type="submit" name="signup-submit">Signup</button>
				</form>

			</section>
			<a href="../index.php"><button class="home">Home</button></a>	<br>
		</div>
	</main>

<?php
?>