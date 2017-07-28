<?php

include 'inc/fonction.inc';
if(fonction_account_verif() == FALSE){
	header('location: index.php');
}

include 'module_gen.php';

?>

<!-- Working in progress... -->

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>
			Interface - Major Panel
		</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body class=panel>
		<div class=header>
			blzbla
		</div>
		<div class=center>
			<?php
				module_gen("admin_mod");
			?>
		</div>	
	</body>
</html>