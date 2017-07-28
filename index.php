<?php

$version = "1.1.0.28072017.2 Qµentih";

include 'inc/config.inc';

/*
include 'inc/fonction.inc';
if(fonction_account_verif() != FALSE){
	header('location: panel.php');
}
*/

?>

<!-- 
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>
			Connexion - Major Panel
		</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</head>
	<body class=connexion>
		<div class=logo>
			Major Panel
			<br>
			<img alt="Major logo" src="img/major.png">
		</div>
		<div class=form>
			<form method=POST action=verif_connexion.php>
				<div class=texte>
					Se connecter
				</div>
				<input type=text name=user placeholder="Nom d'utilisateur" required />
				<br>
				<input type=password name=mdp placeholder="Mot de passe" required />
				<br>
				<input type=submit value="Connexion !" />
			</form>
		</div>
	</body>
</html>
 -->
 
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>
			Major Bot
		</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</head>
	<body class=connexion>
		<div class=logo>
			Major Bot
			<br>
			<img alt="Major logo" src="img/major.png">
		</div>
		<div class=form>
			<form>
				<?php 
					echo "<a href='http://" . @$_SERVER[SERVER_ADDR] . "/phpmyadmin'>Redirection base de données local</a><br />";
					echo "DB : " . $config_mysqli_db . "<br />";
					echo "Table : " . $config_mysqli_table_module;
				?>
			</form>
		</div>
	</body>
</html>
 