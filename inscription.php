<?php
include ("includes/connexion.inc.php");
include ("includes/verif_connexion_user.inc.php");
include ("models/model_bdd.php");
require_once("smarty-3.1.31/libs/Smarty.class.php"); // On inclut la classe Smarty


/*
Expression régulière mail
https://domaine.fr/test/index.php
https?\:+\/{2}([\w\d]+\.[\w]+)[\/\w\d]+\/+([\w\.\d]+)
^https?\:+\/{2}([\w\d]+\.[\w]+)[\/\w\d]+\/+([\w]+\.[\w]+)?$
^https?\:+\/{2}(?:www\.)?([\w\d]+\.[\w]+)[\/\w\d]+\/+([\w]+\.[\w]+\??(?:[\w\d]+=[\w\d]+\&?)*)

Expression téléphone
07 63 19 65 28
([\d]{2})\.?\/?[\/]?

Expression mail
hertsoen.m59@hotmail.fr
[\w\d\.]+@([\w\d]+.[\w]+)
*/

  /********************** Gestion des erreurs de formulaire ****************************************/
if (isset($_POST['input_email']))    {$value_mail="value ='".$_POST['input_email']."'";}      else{$value_mail="";};
if (isset($_POST['input_password1'])){$value_pass1="value ='".$_POST['input_password1']."'";} else{$value_pass1="";};
if (isset($_POST['input_password2'])){$value_pass2="value ='".$_POST['input_password2']."'";} else{$value_pass2="";};



if(!$value_mail){

}
else if(!isset($_POST['input_password1'])){
//  $style_err_pass1 = "style='border: 1px solid red'";
}
else if(!isset($_POST['input_password2']) || $_POST['input_password2'] != $_POST['input_password1']){
//  $style_err_pass2 = "style='border: 1px solid red'";
}

/********************** Gestion des erreurs de formulaire ****************************************/

else{
    $mail     = $_POST['input_email'];
    $password = md5($_POST['input_password1']);
    if (chk_existing_mail($mail)->rowCount() != 0)
    {
      //$style_err_email = "style='border: 1px solid red'";

    }
    else{
      model_createUser($mail,$password);
      header('Location: connexion.php');
      exit;
    }
}


/********************       ***************************/

$smarty = new Smarty;
$smarty->assign(array(
  "intitule" => 'inscription',
  "value_mail" => $value_mail,"value_pass1" => $value_pass1, "value_pass2" => $value_pass2,
));

include ('includes/haut.inc.php');
$smarty->display("inscription.html");
include ('includes/bas.inc.php');

?>
