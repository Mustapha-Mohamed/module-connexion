 <php
session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Index</title>
	</head>
	<body class ="body-index">
		<header class="entete">
	<nav>
	<ul>
    <li><a href="index.php">Accueil</a></li>
	<?php
		session_start();

		if(isset($_POST['deconnexion']))
		{
			unset($_SESSION['login']);
			unset($_SESSION['password']);

		}
		if(!isset($_SESSION['login']) || !isset($_SESSION['password']))
						{
			echo '
				<li><a href="connexion.php">Connexion</a></li>
					<li><a href="inscription.php">Inscription</a></li>';
}
	else
{
	echo '
			<ul><a class="mon-compte" href="profil.php">Mon compte</a></ul> ';?> 

			<form method="post">
				<input type="submit" name="deconnexion" value="deconnexion">

</form> 
	<?php
		}
	?>
</ul>
	</nav>
		</header>
		
<div class="body1">
	<?php
		if(!isset($_SESSION['login']) || !isset($_SESSION['password']))
	{
	echo '
							
		';
   }
    	else
	{
	echo '
							
	';
		}
?>
		</div>
		
		<footer>
			
		</footer>
	</body>	
</html>