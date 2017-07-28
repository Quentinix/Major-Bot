<?php

include 'inc/config.inc';
include 'inc/fonction.inc';

date_default_timezone_set('Europe/Paris');

$mysqli_connect = mysqli_connect($config_mysqli_host, $config_mysqli_user, $config_mysqli_mdp, $config_mysqli_db);
$mysqli_result = mysqli_query($mysqli_connect, "SELECT * FROM ".$config_mysqli_table_module);

$liste_module = array();

$timestampday = 3600*date("G") + 60*date("i") + date("s");

/*
//$timestampday = $timestampday + 3600;
$DHoraire = strstr(date("c"), "+");
if ($DHoraire === "+02:00"){
	$timestampday = $timestampday + 3600;
}
*/

$i = 1;
$k = 1;
while ($row = mysqli_fetch_array($mysqli_result)){
	if (@$row[cron] == 1){
		$time1 = explode(",", @$row[cron_exetime]);
		$time1_count = count($time1);
		$j = 0;
		while ($j < $time1_count){
			$time2[$j] = explode("-", $time1[$j]);
			$j++;
		}
		$time2_count = count($time2);
		$j = 0;
		while ($j < $time2_count){
			$time3av[$j] = explode(":", $time2[$j][0]);
			$time3ap[$j] = explode(":", $time2[$j][1]);
			$j++;
		}
		$time3_count = count($time3av);
		$j = 0;
		while ($j < $time3_count){
			$time4av[$j] = $time3av[$j][0]*3600 + $time3av[$j][1]*60 + $time3av[$j][2];
			$time4ap[$j] = $time3ap[$j][0]*3600 + $time3ap[$j][1]*60 + $time3ap[$j][2];
			$j++;
		}
		$time4_count = count($time4av);
		$j = 0;
		$ok = FALSE;
		while ($j < $time4_count){
			if ($timestampday >= $time4av[$j] & $timestampday <= $time4ap[$j]) {
				$ok = TRUE;
			}
			$j++;
		}
		if ($ok == TRUE) {
			$liste_module[$k] = @$row[nom];
			$k++;
		}
		$i++;
	}
}

if (count($liste_module) == 0) exit;

$count_module = count($liste_module);


$i = 1;
while ($i <= $count_module){
	include 'mod/mod_'.$liste_module[$i].'/cron.php';
	$i++;
}


var_dump($timestampday);

var_dump($_SERVER);
?>