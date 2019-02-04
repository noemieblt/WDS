<?php 

try {           $bdd = new PDO('mysql:host=localhost;dbname=caa;charset=utf8', 'root', '');        }
    catch (Exception $e)    {           die('Erreur : ' . $e->getMessage());        }

?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
    <br>
    <br>
	<form action="login.php" method="post">
	Name: <input type="username" name="name"><br>
	Password: <input type="password" name="password"><br>

    <br>
<input name="login" type="submit" >
</form>
    <br>
    <br>
</body>
</html>

<?php
            
        $identifiant = $_POST['username'] ;
        $mdp = $_POST['password'] ;
        $result = $bdd->query('SELECT * FROM idvd');
        $donnee = $result->fetch();
        while($donnee != null){
            if($donnee['login']==$identifiant AND $donnee['password']==$mdp){
                $user_id = $donnee['id'];
                $_SESSION['login'] = $identifiant;
                $_SESSION['password'] = $mdp;
                $_SESSION['id'] = $user_id;
                $co=true;
            }
            $donnee = $result->fetch();
        } 
        $result->closeCursor();
?>