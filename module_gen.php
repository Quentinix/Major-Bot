<?php

function module_gen($type){
	
	include "inc/config.inc";
	
	if($type == "tuile"){
		$mysql_connect = mysqli_connect($config_mysqli_host, $config_mysqli_user, $config_mysqli_mdp, $config_mysqli_db);
		
		$mysql_request = mysqli_query($mysql_connect, "SELECT * FROM `".$config_mysqli_table_module."`");
		
		while ($row = mysqli_fetch_array($mysql_request)) {
			$mod_id = @$row[id];
			$mod_nom = @$row[nom];
			$mod_tuile = @$row[tuile];
			$mod_titre = @$row[titre];
			
			if ($mod_tuile != 0){
				echo '
				<li class=tuile'.$mod_tuile.'>
				<div class=mod_'.$mod_nom.'>
			';
				include 'mod/mod_'.$mod_nom.'/code.php';
				echo '
				</div>
				</li>
			';
			}
			
		}
	}elseif ($type == "style"){
		$mysql_connect = mysqli_connect($config_mysqli_host, $config_mysqli_user, $config_mysqli_mdp, $config_mysqli_db);
		
		$mysql_request = mysqli_query($mysql_connect, "SELECT * FROM `".$config_mysqli_table_module."`");
		
		while ($row = mysqli_fetch_array($mysql_request)) {
			$mod_id = @$row[id];
			$mod_nom = @$row[nom];
				
			echo '
				<link rel="stylesheet" type="text/css" href="mod/mod_'.$mod_nom.'/style.css">
			';
		}
	}elseif ($type = "admin_mod"){
		// TODO : Working in progress...
	}

}



?>