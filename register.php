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
		<div class="submain1">
			<h2>Créer un compte</h2>
			<div class="inputs">
				<span>7</span>
				<input type="text" name="name" placeholder="Nom d'utilisateur ..." required>
			</div>

			<div class="inputs">
				<span>7</span>
				<input type="email" name="email" placeholder="Votre E-mail ..." required>
			</div>

			<div class="inputs">
				<span>7</span>
				<input type="number" name="age" placeholder="age: ex-17" required>
			</div>

			<div class="inputs">
				<span>7</span>
				<input type="text" name="address" placeholder="Votre ville ..." required>
			</div>

			<div class="inputs">
				<span>.</span>
				<input type="password" name="password" placeholder="Mot de passe ..." required>
			</div>

			<div class="inputs">
				<span>.</span>
				<input type="password" name="cpassword" placeholder="Confirme mot de passe ..." required>
			</div>

			<div style="margin: 2%;">
				<?php
					if(isset($_SESSION['errors'])){
						echo $_SESSION['errors'];
						unset($_SESSION['errors']);
					}
				?>
			</div>
			
			<button name="register">Enregistrer</button>
			<span class="link">J'ai deja un compte? <a href="login.php">Connectez<a/></span>
		</div>
	</form>
</body>
</html>