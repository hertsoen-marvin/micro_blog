<?php
try{
	$pdo = new PDO('mysql:host=localhost;dbname=micro_blog_hertsoen_marvin', 'root', '');
}catch (PDOException $e){
	echo 'Connexion échouée : ' . $e->getMessage();
}

?>
