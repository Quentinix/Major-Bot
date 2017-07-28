<?php

/*
 * Page de test à propos des décalages d'horaires en france.
 */

date_default_timezone_set('Europe/Paris');

var_dump(date("c"));


$timestampday = 3600*date("G") + 60*date("i") + date("s");

$timestampday = $timestampday + 3600;
$DHoraire = strstr(date("c"), "+");
if ($DHoraire === "+02:00"){
	$timestampday = $timestampday + 3600;
}

var_dump($DHoraire);
var_dump($timestampday);

?>