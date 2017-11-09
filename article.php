<?php
	include ("includes/connexion.inc.php");

if ($connecte_util){
	try{
		echo var_dump($_GET);

		$a = $_GET['a'];

		if ($a == 'sup'){
			
			$sql='DELETE FROM messages WHERE id = :id';

			$prep = $pdo->prepare($sql);
			$prep->bindValue(':id',$_GET['id']);
			$prep->debugDumpParams();

			$prep->execute();
			header("Location:index.php");
			exit();
		}
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
		//$sql='DELETE FROM messages WHERE ';
		/*
		$prep = $pdo->prepare($sql);
		$prep->bindValue(':contenu',$_POST['message']);
		$prep->debugDumpParams();


		$prep->execute();

		echo 'envoi réussi ! ';
		//header("Location:index.php");
		//exit();
		*/
	}
	catch (PDOException $e){
		echo 'Connexion échouée : ' . $e->getMessage();
	}
}

?>
