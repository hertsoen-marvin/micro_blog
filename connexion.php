<?php
	include ("includes/connexion.inc.php");
	include ("includes/verif_connexion_user.inc.php");
?>

<?php


	// Si l'utilisateur est déjà connecté, on le renvoie à la page d'accueil
  if($connecte_util){
		header('location:index.php');
	}

	/******************************** Traitement *************************************/
	//Sinon on vérifie
	if(isset($_POST['input_email']) && isset($_POST['input_password'])){

		//1 check email / mdp
		//2 creation id session
		//3 MAJ BDD
		//4 creation cookie
		//5 Redirection


			/* définition des variables */
		$email 		 = $_POST["input_email"];
		$password	 = $_POST["input_password"];

			/* check identifiants  */
		$sql = 'SELECT * from utilisateurs WHERE email = :mail AND password = :pass';
		$prep = $pdo->prepare($sql);
		$prep->bindValue(':mail', $email);
		$prep->bindValue(':pass', md5($password));
		$prep->execute();

		if ($prep->fetch()){										// Si on trouve une correspondance entrée <--> bdd

			if (!isset($_COOKIE['id_session']))		// Si le cookie n'est pas encore créé
			{


					/* creation id session */
				$sid = md5($email . time()); // --> On crée une longue chaine de caractère à partir de l'email par ex. (avec time() en plus pour que la sortie ne soit jamais la même)

					/* MAJ du sid dans la BDD */
				$sql = 'UPDATE utilisateurs SET sid = :sid WHERE email = :email';
				$prep = $pdo->prepare($sql);
				$prep->bindValue(':sid'		,	 $sid);
				$prep->bindValue(':email'	, 	 $email);
				$prep->execute();

					/* Creation cookie sur le client web */
				setcookie('id_session',$sid,time()+60*15);
			}

					/* Redirection	*/
			header("Location:index.php");

		}
		else{
			echo 'Mot de passe / Adresse mail invalide';
		}
	}




	else{
?>


<!-- ******************************** HTML ************************************* -->


<?php
	include ("includes/haut.inc.php");
?>

<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Le fil</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- Connexion Section -->
<section>
	<div class="container ce">
		<div class="row">
			<form class="col-md-4 col-md-offset-4" action="connexion.php" method="POST">	<!-- on centre le bloc formulaire -->
				<!--<div class="col-sm-3">  -->

					<div class="form-group">
						<label> Adresse e-mail : </label>
						<input type="email" class="form-control" name="input_email" aria-describedby="emailHelp" placeholder="nom@exemple.com">
					</div>
					<div class="form-group">
						<label> Mot de passe : </label>
						<input type="password" class="form-control" name="input_password" placeholder="Entrez le mot de passe">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Entrer</button>
				  </div>
			</form>
		</div>
	</div>
</section>

<?php
} // fin de la condition (si on est dans du simple affichage de la page, pas du traitement)
include ("includes/bas.inc.php");
?>
