<?php

include 'inc/fonction.inc';

if(fonction_account_connect(1, $_POST[user], $_POST[mdp]) != FALSE){
	header('location: panel.php');
}else{
	header('location: index.php?erreur=1');
}

?>