<!DOCTYPE html>
<html>


<head>
	<title></title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="form_plan.css">
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
      <li><a href="service.php">NOS SEVICES</a></li>
      <li><a href="newletter.php">NEW LETTER</a></li>
      <li><a href="newletter.php">CONNEXION</a></li>
    </ul>
  </div>
</nav>
</header>
<body class="ll">
	<h1 class="demande">DEMANDE DE PLAN</h1>
        

<div class="page-container">
            
            <form action="traitement_plan.php" method="POST">
			
                <input type="text" name="nom" class="Name" placeholder="Nom"><br>
                <input type="text" name="prenom" class="Name" placeholder="Prenom"><br>
                <input type="email" name="email" class="Name" placeholder="Email"><br>
                <input type="number" name="phone" class="Tele" placeholder="Telephone"><br>
				<input type="text" name="code" class="Email" placeholder="Code"><br>
				<input type="text" name="lieu" class="Address" placeholder="lieu"><br>

                <button type="submit" value="Add" name="submit">Envoyer</button>
            </form>
        </div>

</body>
</html>