<?php 

try {           $bdd = new PDO('mysql:host=localhost;dbname=caa;charset=utf8', 'root', '');        }
    catch (Exception $e)    {           die('Erreur : ' . $e->getMessage());        }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="global">
		<div class="login-wrap">
			<span class="login-title-form">
				Inscrivez-vous !
			</span>
			<br>
			<form method="POST" action="inscription.php" class="login-form" required >
	  			<input class="login-input" type="text" name="username" placeholder="Identifiant" required>
	  			<br>
	  			<input class="login-input" type="password" name="password" placeholder="Mot de passe" required>
	  			<br>
	  			<input class="login-input" type="password" name="confirm-password" placeholder="Confirmer mot de passe" required>
	  			<br><br>
	  			<input class="submit-input" type="submit" name="validation" value="Valider">
	  			<a class="lien" href="logout.php">Connexion</a>
	  			<br>
			</form>
		</div>
	</div> 
</body>
</html>
