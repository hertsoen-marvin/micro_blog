<?php
	/**************** Ajout des includes php *******************/
include ("includes/connexion.inc.php");
include ("includes/verif_connexion_user.inc.php");
require_once("smarty-3.1.31/libs/smarty.class.php"); // On inclut la classe Smarty

$smarty = new Smarty;

if (isset($_GET['a']) && !empty($_GET['a'])){
	$smarty->assign('a', $_GET['a']);
}
if (isset($_GET['id'])){
	$smarty->assign('id', $_GET['id']);
}
if (isset($_GET['contenu'])){
	$smarty->assign('contenu', $_GET['contenu']);
}


$sql="SELECT * FROM messages ORDER BY date DESC";
$stmt=$pdo->query($sql);
if (sizeof($stmt) >= 1){
	$smarty->assign('stmt',$stmt);
}

echo "etat de la variable connecte : " . $connecte_util;
$smarty->assign('connecte_util',$connecte_util);


include ('includes/haut.inc.php');
$smarty->display("index.html");
include ('includes/bas.inc.php');

?>
