<?php 

require 'database.php';

if(!empty($_POST)){

  $nom = checKInput($_POST['nom']);
  $prenom = checKInput($_POST['prenom']);
  $email = checKInput($_POST['email']);
  $phone = checKInput($_POST['phone']);
  $code = checKInput($_POST['code']);
  $lieu = checKInput($_POST['lieu']);



  $db = Database::connect();

  //INSERTION AVEC LA REQUETTE PREPAREE

  $req = $db->prepare("INSERT INTO demande_plan(nom,prenom,email,phone,code,lieu) VALUES(?,?,?,?,?,?)");
  $req->execute(array($nom,$prenom,$email,$phone,$code,$lieu));


  //DECONNECTION

  Database::disconnect();

  //REDIRECTION DE L'UTILISATEUR

  header('Location: plan.php');


 
}
  
//VERIFICATION DES CARACTERE SPECIAUX

function checkInput($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 ?>