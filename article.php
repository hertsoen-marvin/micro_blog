<?php
	include ("includes/connexion.inc.php");
	include ("includes/verif_connexion_user.inc.php");
	include ("models/model_bdd.php");

if ($connecte_util){
	try{
		echo var_dump($_GET);

		$a = $_GET['a'];


/***************************** 			Suppression d'un article		*****************************/
		if ($a == 'sup'){

			model_delete_message((int)$_GET['id']);
			header("Location:index.php");
			exit();
		}
/***************************** 			Modification d'un article		*****************************/

		else if($a == 'mod'){
			model_update_message((int)$_GET['id'], $_GET['message']);
			header("Location:index.php");
			exit();
		}
		else{
		}
	}
/***************************** 			Affichage des erreurs		*****************************/

	catch (PDOException $e){
		echo 'Connexion échouée : ' . $e->getMessage();
	}
}

?>
