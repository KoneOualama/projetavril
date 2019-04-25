
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="connexion.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Connexion</h2>
<form class="login-form"  action="login.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="">
            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
            <input type="password" class="form-control" name="password" placeholder="">
          </div>
          
          
            <div class="form-check">
            <button type="submit" class="btn btn-login float-right">Soumettre</button>
          </div>
</form>
<div class="copy-text">By <i class="fa fa-heart"></i> Team <a href="">ThreeBoy's</a></div>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="images/pexels1.jpeg" alt="First slide" style="width: 100%">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Construction</h2>
            <p>L'architecture, c'est le fait d'imaginer un lieu, un espace, un monument ou une habitation et d'en faire les plans pour ensuite le transmettre à une entreprise de ...</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/pexels8.jpeg" alt="First slide" style="width: 100%">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Plan</h2>
            <p>L'architecture, c'est le fait d'imaginer un lieu, un espace, un monument ou une habitation et d'en faire les plans pour ensuite le transmettre à une entreprise de ...</p>
        </div>	
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/pexels11.jpeg" alt="First slide" style="width: 100%">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Conseil</h2>
            <p>L'architecture, c'est le fait d'imaginer un lieu, un espace, un monument ou une habitation et d'en faire les plans pour ensuite le transmettre à une entreprise de ...</p>
        </div>	
    </div>
  </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>
</body>
</html>