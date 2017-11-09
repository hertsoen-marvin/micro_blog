<?php
include ('includes/connexion.inc.php');

$connecte = false
if(isset($_COOKIE['id_session'])){

	$sql = 'SELECT * from utilisateurs WHERE sid = :sid';
	$prep = $pdo->prepare($sql);
	$prep->bindValue(':mail', $email);
	$prep->bindValue(':pass', $password);
	$prep->execute();

	if ($prep->fetch()){

	}



//cookie ?
//sid ok ?
//$connecte = true / false
}

/*?>*/ // C'est mieux de ne pas mettre de balise de fin php dansles clasees / fonctions --> fichiers inclus. (il se peut qu'on mette par inadvertance un caractère invisible
			 // du genre retour à la ligne ou tab qui pourrait poser problème en dessous du script (notament sur les fonctions modifiant l'entete http ( setcookie..)))
