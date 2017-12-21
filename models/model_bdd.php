<?php



function model_createUser($mail, $password){
  include ("includes/connexion.inc.php");

  $sql="INSERT INTO utilisateurs(email, password) VALUES (:email, :pass)";

  $prep = $pdo->prepare($sql);
  $prep->bindValue(':email',$mail);
  $prep->bindValue(':pass',$password);
  $prep->execute();

}

function chk_existing_mail($mail){
  include ("includes/connexion.inc.php");

  $sql="SELECT * FROM utilisateurs WHERE email=:email";

  $prep = $pdo->prepare($sql);
  $prep->bindValue(':email',$mail);
  $prep->execute();

  return $prep;
}


?>
