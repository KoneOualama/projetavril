  <!DOCTYPE html>
<html>

<head>
	<title></title>
	 <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="newletter.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<header>
      
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">THREEBOY'S</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">ACCUEIL</a></li>
      <li><a href="plan.php">CATALOGUE DE PLAN</a></li>
      <li><a href="galerie.php">GALERIE</a></li>
      <li><a href="service.php">NOS SERVICES</a></li>
      <li><a href="newletter.php">NEW LETTER</a></li>
      <li><a href="connexion.php">CONNEXION</a></li>
    </ul>
  </div>
</nav>
</header>
<body class="chic">

  
            <center> <h1 style="margin-top: 160px;">BIENVEVUE SUR LA PAGE NEWLETTER</h1>

            <div class="container">
  
  <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">VEUILLEZ RENSEIGNER CES CHAMPS MAINTENANT</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
     
        <div class="modal-footer">
         
            <div id="login">
       <!--  <h3 class="text-center text-white pt-5">CONNEXION</h3> -->
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="trai_newletter.php" method="post">
                            <h3 class="text-center text-info">NEWLETTER</h3>

                             <div class="form-group">
                                <label for="nom" class="text-info">NOM:</label><br>
                                <input type="E-MAIL" name="nom"  class="form-control" required="required">
                            </div>

                             <div class="form-group">
                                <label for="prenom" class="text-info">PRENOM:</label><br>
                                <input type="E-MAIL"  name="prenom"  class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">E-MAIL:</label><br>
                                <input type="E-MAIL"  name="email"  class="form-control" required="required">
                            </div>
                           
                            <div class="form-group">
                               
                                <input type="submit" name="newletter" class="btn btn-info btn-md" value="VALIDER">
                            </div><br>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>
      </div>
      
    </div>
  </div>
  
</div></center>



</body>
</html>