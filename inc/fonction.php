<?php

function fonction_version(){
	return "16W43A Adaptation sans licence";
}

function fonction_mod_mysqlaccess_select($mod, $parametre){
	if (!isset($parametre)) return trigger_error("La fonction doit comporter deux valeurs obligatoires.", E_USER_ERROR);
	if (!isset($mod)) return trigger_error("La fonction doit comporter deux valeurs obligatoires.", E_USER_ERROR);
	include("config.inc");
	$mysqli_connect = mysqli_connect($config_mysqli_host, $config_mysqli_user, $config_mysqli_mdp, $config_mysqli_db);
	$mysqli_result = mysqli_query($mysqli_connect, "SELECT * FROM ".$mod." WHERE `parametre` LIKE '".$parametre."'");
	while(@$mysqli_row=mysqli_fetch_assoc($mysqli_result)) return @$mysqli_row[valeur];
	return "";
}
/*
 * Fonction :
 * Variable config : $config_mysqli_host, $config_mysqli_user, $config_mysqli_mdp, $config_mysqli_db
 */

function fonction_mod_mysqlaccess_write($mod, $parametre, $valeur){
	if (!isset($parametre)) return trigger_error("La fonction doit comporter trois valeurs obligatoires.", E_USER_ERROR);
	if (!isset($valeur)) return trigger_error("La fonction doit comporter trois valeurs obligatoires.", E_USER_ERROR);
	if (!isset($mod)) return trigger_error("La fonction doit comporter trois valeurs obligatoires.", E_USER_ERROR);
	include("config.inc");
	$mysqli_connect = mysqli_connect($config_mysqli_host, $config_mysqli_user, $config_mysqli_mdp, $config_mysqli_db);
	if(mysqli_errno($mysqli_connect)) trigger_error("Echec requête MySQL : ".mysqli_errno($mysqli_connect)." : ".mysqli_error(), E_USER_ERROR);
	$mysqli_result = mysqli_query($mysqli_connect, "SELECT * FROM ".$mod." WHERE `parametre` LIKE '".$parametre."'");
	if(mysqli_errno($mysqli_connect)) trigger_error("Echec requête MySQL : ".mysqli_errno($mysqli_connect)." : ".mysqli_error(), E_USER_ERROR);
	$exist = FALSE;
	while($mysqli_row=mysqli_fetch_assoc($mysqli_result)) $exist = TRUE;
	if ($exist == TRUE) $mysqli_request = "UPDATE `".$mod."` SET `valeur` = '".$valeur."' WHERE `parametre` = '".$parametre."'";
	else $mysqli_request = "INSERT INTO `".$mod."` (`id`, `parametre`, `valeur`) VALUES (NULL, '".$parametre."', '".$valeur."')";
	mysqli_query($mysqli_connect, $mysqli_request);
	var_dump($mysqli_request);
	if(mysqli_errno($mysqli_connect)) trigger_error("Echec requête MySQL : ".mysqli_errno($mysqli_connect)." : ".mysqli_error(), E_USER_ERROR);
	return TRUE;
}
/*
 * Fonction :
 * Variable config : $config_mysqli_host, $config_mysqli_user, $config_mysqli_mdp, $config_mysqli_db
 */

function fonction_mod_freemobile_sendsms($user, $pass, $message){
	$url = "https://smsapi.free-mobile.fr/sendmsg?user=".$user."&pass=".$pass."&msg=".urlencode($message);
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	curl_close($ch);
	return TRUE;
}
/*
 * Fonction :
 * Variable config :
 */









?>