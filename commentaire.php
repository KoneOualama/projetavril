<?php 
/*connection a base de donnée database*/
  require 'database.php';

  /*requette preparée d'insertion de données dans la base de donnée*/

  $req = $bdd->prepare('INSERT INTO commentaire (messsage) VALUES(?)');

  /*creeation des variables de données*/

  $req->execute(array( $_POST['messsage']));

  var_dump($_POST['messsage']);
  
  // header('Location:accueil.php');
 ?>



