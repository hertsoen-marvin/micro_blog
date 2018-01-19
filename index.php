<?php
	/**************** Ajout des includes php *******************/
include ("includes/connexion.inc.php");
include ("includes/verif_connexion_user.inc.php");
include ("models/model_bdd.php");

require_once("smarty-3.1.31/libs/Smarty.class.php"); // On inclut la classe Smarty

$smarty = new Smarty;

	/* Récupération des valeurs envoyées par formulaire */
if (isset($_GET['a']) && !empty($_GET['a'])){
	$smarty->assign('a', $_GET['a']);
}
if (isset($_GET['id'])){
	$smarty->assign('id', $_GET['id']);
}
if (isset($_GET['contenu'])){
	$smarty->assign('contenu', $_GET['contenu']);
}





if (isset($_GET['search_bar']) && !empty($_GET['search_bar'])){

	$messages = model_search_messages($_GET['search_bar']);

	if (sizeof($messages) >= 1){
		$smarty->assign('messages',$messages);
	}
}
else{

		/* récupération des messages depuis la base */
	$messages = model_get_all_messages();
	if (sizeof($messages) >= 1){
		$smarty->assign('messages',$messages);
	}

}






	/* Envoi vers l'HTML de la variable témoin de connexion utilisateur */
$smarty->assign('connecte_util',$connecte_util);


include ('includes/haut.inc.php');
$smarty->display("index.html");
include ('includes/bas.inc.php');

?>
