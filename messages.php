<?php
	include ("includes/connexion.inc.php");
	include ("includes/verif_connexion_user.inc.php");
	include ("models/model_bdd.php");
	include ("helpers/regEx.php");


if (isset($_GET['a']))						{$a = $_GET['a'];}
if (isset($_GET['ajaxRequest'])) 	{$ajaxRequest = $_GET['ajaxRequest'];}

	/* pas besoin d'être connecté pour afficher un message en entier */
if (isset($ajaxRequest) && !empty($ajaxRequest)){
		//Importation d'un message en entier
	if ($ajaxRequest == 'getAllMessage'){
		if (isset($_GET['id_message']) && !empty($_GET['id_message'])){
			// var_dump(checkForRegExSingleMessage(model_get_message($_GET['id_message'])));
			echo(json_encode(checkForRegExSingleMessage(model_get_message($_GET['id_message']))));
		}
	}
}

if ($connecte_util){
	try{

		if (isset($a) && !empty($a)){
	/***************************** 			Création d'un message		*****************************/
			if ($a == 'crea'){

				model_create_message($_GET['message']);
				header("Location:index.php");
				exit();
			}
	/***************************** 			Suppression d'un message		*****************************/
			if ($a == 'sup'){

				model_delete_message((int)$_GET['id']);
				header("Location:index.php");
				exit();
			}
	/***************************** 			Modification d'un message		*****************************/

			else if($a == 'mod'){
				model_update_message((int)$_GET['id'], $_GET['message']);
				echo $_GET['id'] . " - " . $_GET['message'];

				header("Location:index.php");
				exit();
			}
			else{
			}
		}
	}
/***************************** 			Affichage des erreurs		*****************************/
	catch (PDOException $e){
		echo 'Connexion échouée : ' . $e->getMessage();
	}
}
else{
//	echo(json_encode(array('erreur' => "pas connecté")));


}

?>
