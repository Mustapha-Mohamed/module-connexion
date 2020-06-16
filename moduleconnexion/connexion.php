<?php
	session_start();
	if((isset($_POST['login'])) && (isset($_POST['passe'])) && (isset($_POST['Connexion'])))

{
	    $login = $_POST['login'];
		$connexion = mysqli_connect("localhost", "root", "", "moduleconnexion");
		$requete = "select *from utilisateurs WHERE login='$login'";
		$query = mysqli_query($connexion, $requete);
		$row= mysqli_fetch_array($query);

		

		if(password_verify($_POST['passe'],$row['password']))
		{
		$_SESSION['login']= $_POST['login'];
		$_SESSION['password']= $_POST['passe'];
		header('location: index.php');

		}
		else
		{
		echo "Login ou mot de passe incorrect(s)";
		}
		
} 

?>	
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title >Connexion</title>
	</head>
	<body class="body-connexion">
		<header>
			<nav>
				<ul>
					<ul><a href="index.php">Accueil</a></ul>
					<?php
						if(!isset($_SESSION['login']) || !isset($_SESSION['password']))
						{
							echo '
								<ul><a href="connexion.php">Connexion</a></ul>
								<ul><a href="inscription.php">Inscription</a></ul>
							';
						}
						else
						{
							echo '
								<ul><a class="mon-compte" href="profil.php">Mon compte</a></ul>
								<ul><a class="deconnection" href="deconnection.php">Déconnexion</a></ul>
								<ul><a class="admin" href="admin.php">Admin</a></ul>
							';
						}
					?>
				</ul>
			</nav>
		</header>
		
		<div class="body">
			<div id="connexion">
				<form method="post" action="connexion.php">
					<fieldset>
						<legend>Connexion</legend>
			<input type="text" name="login" required class="connexion_2" placeholder="login"/>
			<br>
						<input type="password" required name="passe" class="connexion_2"  placeholder="mot de passe"/>
			<br>			
			<br>
						<input type="submit" value="Se connecter" name="Connexion"/>
			<br>			

					</fieldset>
				</form>
			</div>
		</div>
		
		<footer>
			
		</footer>
	</body>
</html>