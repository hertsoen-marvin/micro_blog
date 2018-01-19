<?php
	include ("includes/connexion.inc.php");
	include ("includes/verif_connexion_user.inc.php");
	include ("models/model_bdd.php");
		require_once("smarty-3.1.31/libs/Smarty.class.php"); // On inclut la classe Smarty



	// Si l'utilisateur est déjà connecté, on le renvoie à la page d'accueil
  if($connecte_util){
		header('location:index.php');
	}



	/******************************** Traitement *************************************/
	//Sinon on vérifie
	if(isset($_POST['input_email']) && isset($_POST['input_password'])){




			/* définition des variables */
		$email 		 = $_POST["input_email"];
		$password	 = $_POST["input_password"];

			/* check identifiants  */
			$chkuser = model_check_ids_connection($email,$password)->rowCount();
			var_dump('test' . $chkuser);

		if (model_check_ids_connection($email,$password)->rowCount() != 0){										// Si on trouve une correspondance entrée <--> bdd


			if (!isset($_COOKIE['id_session']))		// Si le cookie n'est pas encore créé
			{
					/* creation id session */
				$sid = md5($email . time()); // --> On crée une longue chaine de caractère à partir de l'email par ex. (avec time() en plus pour que la sortie ne soit jamais la même)
				model_update_sid_session($sid,$email);					/* Création du sid & maj dans la base */
				setcookie('id_session',$sid,time()+60*15);					/* Creation cookie sur le client web */
			}

					/* Redirection	*/
			header("Location:index.php");

		}
		else{
			echo 'Mot de passe / Adresse mail invalide';
		}
	}



		$smarty = new Smarty;
		$smarty->assign(array(
		  "intitule" => 'Connexion à lapp'
		));

		include ('includes/haut.inc.php');
		$smarty->display("connexion.html");
		include ('includes/bas.inc.php');
