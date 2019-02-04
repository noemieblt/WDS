<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<div id="global">
		<div class="login-wrap">
			<span class="login-title-form">
				Inscrivez-vous !
			</span>
			<br>
			<form method="POST" action="register.php" class="login-form" required >
	  			<input class="login-input" type="text" name="username" placeholder="Identifiant" required>
	  			<br>
	  			<input class="login-input" type="password" name="password" placeholder="Mot de passe" required>
	  			<br>
	  			<input class="login-input" type="password" name="confirm-password" placeholder="Confirmer mot de passe" required>
	  			<br><br>
	  			<input class="submit-input" type="submit" name="validation" value="Valider">
	  			<a class="lien" href="login.php">Connexion</a>
	  			<br>
			</form>
		</div>
	</div> 
</body>
<?php
	// Click button test
	if (isset($_POST['validation'])) {
		// Check of the password input
		if($_POST['password'] == $_POST['confirm-password']){
			$reponse = $bdd->prepare("")
		}
	}
?>
</html>
