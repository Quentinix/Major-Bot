<?php

$mod = "mod_meteo_vigilance";
$user = "numero abo FreeMobile";
$pass = "Mot de passe API FreeMobile";
$email = "email";

include 'vigimeteo-master/index.php';

$xml_file = simplexml_load_file("carte_vigilance_meteo.xml");

$alerte = fonction_mod_mysqlaccess_select("mod_meteo_vigilance","alerte");

$n_alerte = $xml_file->dep_57->niveau;

if ($alerte != $n_alerte){
	fonction_mod_mysqlaccess_write($mod, "alerte", $n_alerte);
	$message = "La moselle est passée en vigilance ".strtolower($xml_file->dep_57->alerte).".";
	//fonction_mod_freemobile_sendsms($user, $pass, $message);
	$boundary = "-----=".md5(rand());
	$header = "From: \"Major Panel\"<webmaster@quentinix.fr>\r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-Type: multipart/alternative;\r\n"." boundary=\"$boundary\"\r\n";
	mail($email, $message, $message, $header);
}


?>