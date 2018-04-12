<?php

include ('includes/connexion.inc.php');

$connecte_util = false;
$email_util    = null;

if (isset($_COOKIE['id_session']) && $_COOKIE['id_session']){    //false : chaine vide ; true : chaine pleine

  // Accès bdd, récupération du id_session de la bdd

  $sql = 'SELECT * from utilisateurs WHERE sid = :sid';
  $prep = $pdo->prepare($sql);
  $prep->bindValue(':sid', $_COOKIE['id_session']);
  $prep->execute();

  $resultat = $prep->fetch(PDO::FETCH_ASSOC);
  // On defini les variables globales


  if (isset($resultat['sid']) && $_COOKIE['id_session'] == $resultat['sid']){      // Si la sid est récupéré depuis la bdd, n'est pas vide &  est égal au cookie

    $connecte_util = true;
    if (isset($resultat['email']) && $resultat['email']){                                              // Si l'email est récupéré depuis la bdd & qu'il n'est pas vide
      $email_util = $resultat['email'];
    }
  }
  else {
    $connecte_util = false;
  }

}
