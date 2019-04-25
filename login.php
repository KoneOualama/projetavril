<?php
    session_start();

    require 'database.php';

    $email = $password = "";
    $emailError = $passwordError = $compteError = "";
    $isSuccess = false;

        //function
    function verifyInput($var)
        {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);
            return $var;
        }
    
    function verifyEmail($var)
        {
            return filter_var($var, FILTER_VALIDATE_EMAIL);
        }

    if(!empty($_POST))
        {
            
            $email = verifyInput($_POST['email']);
            $password = verifyInput($_POST['password']);

            $isSuccess = true;

            if(!verifyEmail($email))
                {
                    $emailError = 'email invalide';
                    $isSuccess = false;
                }

            if(empty($email))
                {
                    $emailError = 'Votre Email';
                }

            if(empty($password))
                {
                    $passwordError = 'votre mot de passe';
                    $isSuccess = false;
                }

            if($isSuccess)
                {
                    $req = $bdd->prepare('SELECT * FROM demande_plan WHERE email = ? AND phone = ? ');
                    $item = $req->execute(array($email, $password));
                    $userExiste = $req->fetch();

                    // $req2 = $Database->prepare('SELECT compte.solde FROM compte INNER JOIN user WHERE compte.id_user = ?  ');                        
                    // $req2->execute(array($id_user));
                    // $id = $req2->fetch();

                    //$userExiste = $req->rowCount();
                    if($userExiste)
                        {
                            // $compteError = 'bravooooooooo';
                            //s$userInfo = $req->fetch();
                            
                            $_SESSION['id_plan'] = $userExiste['id_plan'];
                            $_SESSION['nom'] = $userExiste['nom'];
                            $_SESSION['prenom'] = $userExiste['prenom'];
                            $_SESSION['phone'] = $userExiste['telephone'];
                            $_SESSION['email'] = $userExiste['email'];
                            $_SESSION['code'] = $userExiste['code'];
                             $_SESSION['lieu'] = $userExiste['lieu'];


                           
                            header("location: index.php");

                        }

                    else
                        {
                            $compteError = 'email ou mot de passe incorrect';
                        }
                }
        }

?>



