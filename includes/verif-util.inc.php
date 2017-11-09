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

?>