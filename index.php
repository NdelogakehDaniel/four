<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login1.css">
</head>
<body>
	<form class="main" action="process.php" method="POST">
		<div class="submain">
			<h1>LOGIN</h1>
			<div class="inputs">
				<span>7</span>
				<input type="text" name="email" placeholder="E-mail ...">
			</div>

			<div class="inputs">
				<span>.</span>
				<input type="password" name="password" placeholder="Mot de passe ...">
			</div>

			<div style="margin: 2%;">
				<?php
					if(isset($_SESSION['errors'])){
						echo $_SESSION['errors'];
						unset($_SESSION['errors']);
					}
				?>
			</div>

			<button name="login">Login</button>
			<span class="link">vous n'avez pas de compte? <a href="register.php">S'inscrire<a/></span>
		</div>
	</form>
</body>
</html>