<?php 

require 'database.php';

if(!empty($_POST)){

  $nom = checKInput($_POST['nom']);
  $prenom = checKInput($_POST['prenom']);
  $email = checKInput($_POST['email']);
  


  $db = Database::connect();

  //INSERTION AVEC LA REQUETTE PREPAREE

  $req = $db->prepare("INSERT INTO newletter(nom,prenom,email) VALUES(?,?,?)");
  $req->execute(array($nom,$prenom,$email));


  //DECONNECTION

  Database::disconnect();

  //REDIRECTION DE L'UTILISATEUR

  header('Location: index.php');


 
}
  
//VERIFICATION DES CARACTERE SPECIAUX

function checkInput($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 ?>