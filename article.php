<?php
	include ("includes/connexion.inc.php");
	include ("includes/verif_connexion_user.inc.php");

if ($connecte_util){
	try{
		echo var_dump($_GET);

		$a = $_GET['a'];


/***************************** 			Suppression d'un article		*****************************/
		if ($a == 'sup'){

			$sql='DELETE FROM messages WHERE id = :id';

			$prep = $pdo->prepare($sql);
			$prep->bindValue(':id',$_GET['id']);
			$prep->debugDumpParams();

			$prep->execute();
			header("Location:index.php");
			exit();
		}
/***************************** 			Modification d'un article		*****************************/

		else if($a == 'mod'){
			$sql='UPDATE messages SET contenu = :contenu, date = UNIX_TIMESTAMP() WHERE id = :id';
			$prep = $pdo->prepare($sql);
			$prep->bindValue(':contenu',$_GET['message']);
			$prep->bindValue(':id',$_GET['id']);
			$prep->debugDumpParams();

			echo $sql;
			$prep->execute();
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
