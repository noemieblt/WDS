
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form action="logout.php" method="post">
	Name: <input type="username" name="name"><br>
	Password: <input type="password" name="password"><br>
<input name="login" type="submit" >
</form>
</body>
</html>

<?php
            
        $identifiant = $_POST['username'] ;
        $mdp = $_POST['password'] ;
        $result = $bdd->query('SELECT * FROM idvd');
        $donnee = $result->fetch();
        while($donnee != null){
            if($donnee['username']==$identifiant AND $donnee['password']==$mdp){
                $user_id = $donnee['id'];
                $_SESSION['identifiant'] = $identifiant;
                $_SESSION['password'] = $mdp;
                $_SESSION['id'] = $user_id;
                $co=true;
            }
            $donnee = $result->fetch();
        } 
        $result->closeCursor();
?>