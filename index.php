<?php
	/**************** Ajout des includes php *******************/
include ("includes/connexion.inc.php");
include ("includes/verif_connexion_user.inc.php");
include ("models/model_bdd.php");
include ("helpers/regEx.php");


require_once("smarty-3.1.31/libs/Smarty.class.php"); // On inclut la classe Smarty

$smarty = new Smarty;
$ip_client = $_SERVER['REMOTE_ADDR'];


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

//model_check_ids_connection($email,$password)->rowCount() != 0
$nb_messages = model_get_all_messages()->rowCount();
if ($nb_messages >= 1){
	$nb_cases_pagination = ceil($nb_messages/5);
	$smarty->assign('nb_cases_pagination', $nb_cases_pagination);

}



	/* Tests pour l'affichage des messages  */
if (isset($_GET['search_bar']) && !empty($_GET['search_bar'])){

	$messages = model_search_messages($_GET['search_bar']);

	if (sizeof($messages) >= 1){
		$messages_with_links = checkForRegEx($messages);
		$smarty->assign('messages',$messages_with_links);
	}
}


else if (isset($_GET['selected_page']) && !empty($_GET['selected_page'])){
	$index = ($_GET['selected_page']-1)*5;
	$messages = model_get_paging_messages($index);
	//	var_dump($messages);
	if (sizeof($messages) >= 1){
		$messages_with_links = checkForRegEx($messages);
		$smarty->assign('messages',$messages_with_links);
	}
}


else{

		/* récupération des messages depuis la base */
	$messages = model_get_paging_messages(0);
	//var_dump($messages);
	if (sizeof($messages) >= 1){

		$messages_with_links = checkForRegEx($messages);
		$smarty->assign('messages',$messages_with_links);
	}
}



	/* Envoi vers l'HTML de la variable témoin de connexion utilisateur */
$smarty->assign('connecte_util',$connecte_util);


include ('includes/haut.inc.php');
$smarty->display("index.html");
include ('includes/bas.inc.php');

?>
