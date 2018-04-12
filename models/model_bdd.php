<?php

/*********************************************** Partie table Utilisateurs ***************************************************/


  /* Création d'un utilisateur */
function model_createUser($mail, $password){
  include ("includes/connexion.inc.php");

  $sql="INSERT INTO utilisateurs(email, password) VALUES (:email, :pass)";

  $prep = $pdo->prepare($sql);
  $prep->bindValue(':email',$mail);
  $prep->bindValue(':pass',$password);
  $prep->execute();

}

  /* Vérificaton de la concordance email/password dans la bd */
function model_check_ids_connection($email,$password){
  include ("includes/connexion.inc.php");

  $sql = "SELECT * FROM utilisateurs WHERE email = :mail AND password = :pass";
  $prep = $pdo->prepare($sql);

  $prep->bindValue(':mail', $email);
  $prep->bindValue(':pass', md5($password));
  $prep->execute();

  return $prep;
}

  /* MAJ du sid dans la BDD */
function model_update_sid_session($sid,$email){
  include ("includes/connexion.inc.php");

  $sql = 'UPDATE utilisateurs SET sid = :sid WHERE email = :email';
  $prep = $pdo->prepare($sql);
  $prep->bindValue(':sid'		,	 $sid);
  $prep->bindValue(':email'	, 	 $email);
  $prep->execute();

}

  /* Vérification d'un email existant dans la BD (éviter doublons à l'inscription) */
function chk_existing_mail($mail){
  include ("includes/connexion.inc.php");

  $sql="SELECT * FROM utilisateurs WHERE email=:email";

  $prep = $pdo->prepare($sql);
  $prep->bindValue(':email',$mail);
  $prep->execute();

  return $prep;
}

/*********************************************** Partie table messages ***************************************************/

  /* création d'un message */
function model_create_message($contenu){
  include ("includes/connexion.inc.php");

  $sql='INSERT INTO messages(contenu,date) VALUES (:contenu,UNIX_TIMESTAMP())'; //UNIX_TIMESTAMP()

  $prep = $pdo->prepare($sql);
  $prep->bindValue(':contenu',$contenu);
  $prep->execute();
}

  /* suppression d'un message */
function model_delete_message($id){
  include ("includes/connexion.inc.php");

  $sql='DELETE FROM messages WHERE id = :id';
  $prep = $pdo->prepare($sql);
  $prep->bindValue(':id',(int)$_GET['id']);
  $prep->execute();
}

  /* modification d'un message */
function model_update_message($id, $contenu){
  include ("includes/connexion.inc.php");

  $sql='UPDATE messages SET contenu = :contenu, date = UNIX_TIMESTAMP() WHERE id = :id';
  $prep = $pdo->prepare($sql);
  $prep->bindValue(':contenu',$contenu);
  $prep->bindValue(':id',$id);
  $prep->execute();

}

  /* récupération de tous les messages */
function model_get_all_messages(){
  include ("includes/connexion.inc.php");

  $sql="SELECT * FROM messages ORDER BY date DESC";
  $messages=$pdo->query($sql);

  return $messages;
}

/* récupération d'un message en entier */
function model_get_message($id){
  include ("includes/connexion.inc.php");

  $sql="SELECT * FROM messages where id = :id";
  $prep = $pdo->prepare($sql);
  $prep->bindValue(':id',$id);
  $prep->execute();
  return $prep->fetch(PDO::FETCH_ASSOC);

}

/* Chercher un message à partir de la pagination */
function model_get_paging_messages($index){

  include ("includes/connexion.inc.php");

    $debut = $index;
    $fin = 5;

    //echo "debut : " . $debut . "fin : " .$fin;

    $sql="select id, SUBSTRING(contenu, 1, 100) as contenu, date from messages ORDER BY date DESC limit " .$debut.", ". $fin; //
    var_dump($sql);
    $retour = $pdo->query($sql);
    return $retour->fetchAll(PDO::FETCH_ASSOC);
}

/* Chercher un message particulier */
function model_search_messages($recherche){

  include ("includes/connexion.inc.php");

  $sql="SELECT * FROM messages WHERE contenu LIKE '%".$recherche."%' ORDER BY date DESC"; //
  $retour =  $pdo->query($sql);
  return $retour->fetchAll(PDO::FETCH_ASSOC);

}


?>
