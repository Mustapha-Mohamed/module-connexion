<?php
	session_start();
	if (isset($_POST['inscription']))
	{
		$login = $_POST['login'];
		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$pass = password_hash($_POST['pass'], PASSWORD_BCRYPT, ['cost' => 12]);
		$confirmpass = $_POST['confirmpass'];
		$connexion = mysqli_connect("localhost", "root", "", "moduleconnexion");
		$requete = "INSERT INTO utilisateurs(login, prenom, nom, password) VALUES ('$login', '$prenom', '$nom','$pass')";
		$query = mysqli_query($connexion, $requete);
	}
	?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Inscription</title>
	</head>
	
	<body class="body-inscription">
		
		<div class="body">
			<div id="inscription">
				<form method="post">
					<fieldset>
						<h2>Inscription</h2>
						<input type="text" name="login" class="inscription_2" placeholder="login"/>
						<br>
						<input type="text" name="prenom" class="inscription_2" placeholder="prenom"/>
						<br>
						<input type="text" name="nom" class="inscription_2" placeholder="nom"/>
						<br>
						<input type="password" name="pass" class="inscription_2" placeholder="mot de passe"/>
						<br>
						<input type="password" name="confirmpass" class="inscription_2" placeholder="confirme mot de passe"/>
						<br>
						<br>
						<input type="submit" value="Inscription" name="inscription"/>
					</fieldset>
				</form>
			</div>
		</div>
		
		<footer>
		<nav>
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<?php
						if(!isset($_SESSION['login']) || !isset($_SESSION['password']))
						{
							echo '
								<li><a href="connexion.php">Connexion</a></li>
								<li><a href="inscription.php">Inscription</a></li>
							';
						}
					?>
				</ul>
			</nav>
		</footer>
	</body>
</html>