<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="form_service.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
   <form action="traitementservice.php" method="POST"> <div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Service</h2>
				<h4>Veuillez-vous enregistrer !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="nom">Nom:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="nom" placeholder="Entrer votre nom" name="nom">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="prenom">Prenom:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="prenom" placeholder="Entrer votre prenom" name="prenom">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control"  placeholder="Enter email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="phone">Téléphone:</label>
				  <div class="col-sm-10">
					<input type="number" class="form-control" placeholder="Enter le téléphone" name="phone">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="service">Type de service:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control"  placeholder="Entrer le type de service" name="typeservice">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Lieu:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control"  placeholder="Entrer votre habitation" name="lieu">
				  </div>
				</div>
				
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Envoyer</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</form> 

</body>
</html>