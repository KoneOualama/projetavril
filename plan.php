<!DOCTYPE html>
<html>
<head>
  <title> Catalogue de plan</title>
  <link rel="stylesheet" type="text/css" href="test.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-30oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  
</head>
<header>
  <?php 
      include 'header.php';
   ?>
</header>
<body>

 <div>
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/pexels6.jpeg" alt="Los Angeles" style="width:1400px; height:500px">
      </div>

      <div class="item">
        <img src="images/pexels1.jpeg" alt="Chicago" style="width:1400px;  height:500px">
      </div>
    
      <div class="item">
        <img src="images/pexels12.jpeg" alt="New york" style="width:1400px;  height:500px">
      </div>

       <div class="item">
        <img src="images/pexels7.jpeg" alt="New york" style="width:1400px;  height:500px">
      </div>

       <div class="item">
        <img src="images/pexels8.jpeg" alt="New york" style="width:1400px; height:500px">
      </div>

       <div class="item">
        <img src="images/pexels9.jpeg" alt="New york" style="width:1400px; height:500px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Precédent</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Suivant</span>
    </a>
  </div>
</div>

<h2 style="text-align: center; padding-top: 20px; font-weight: bolder; color: red;">Catalogue de plans de maisons individuelles en 3d, photos et plans architecte</h2><br><br>

 <section class="conseil" id="conseil">
 
  <div class="container" id="row">
    <div class="row">


                                <?php
                                 $db = Database::connect();
                                 $items = $db->prepare("SELECT * FROM ajout_plan") ;
                                 $items->execute(array(1));
                                 while ($affiche = $items->fetch()) {

                                ?>


      <div class="col-sm-4">
        <div class="card wow wow flipInY" data-wow-duation="3s"" style="width: 18rem;">
         <a href="inscription.php">
          <img style="width:300px; height: 200px" src="images/galerie/<?php echo $affiche['images']; ?>" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
        <p class="card-text">
          <h3><?php echo $affiche['titre_plan']; ?></h3>

          <span><?php echo $affiche['desc_plan']; ?></span>

        </p>
       CODE: <input type="text" name="" value="<?php echo $affiche['code_plan']; ?>" disabled>
       <br> <br>

        <a href="form_plan.php" class="btn btn-success">INTERESSER</a><br><br>
        </div>
        </div>
      </div>


                                 <?php
                                  } 
                                 ?>

      <!-- <div class="col-sm-4">
        <h3>Choix pour faire un plan de construction:</h3>
        <div class="card wow wow flipInY" data-wow-duation="3s" style="width: 18rem;">
          <a href="inscription.php"><img src="images/photo2.jpg" class="card-img-top" alt="..."></a> 
  <div class="card-body">
    <p class="card-text">1 - faire faire le plan de construction pour une maison neuve par un architecte ou un constructeur qui fera faire la construction. Comparez les prix maison architecte / maison constructeur.</p>
  </div>
</div>
      </div>
      <div class="col-sm-4">
          <h3>Choix pour faire un plan de construction:</h3>
        <div class="card wow wow flipInY" data-wow-duation="3s"" style="width: 18rem;">
         <a href="inscription.php"><img src="images/photo13.jpg" class="card-img-top" alt="...">
  <div class="card-body"></a> 
    <p class="card-text">1 - faire faire le plan de construction pour une maison neuve par un architecte ou un constructeur qui fera faire la construction. Comparez les prix maison architecte / maison constructeur.</p>
  </div>
</div>
      </div>
    </div> -->
   <!-- <div class="row">
      <div class="col-sm-4">
          <h3>Choix pour faire un plan de construction:</h3>
        <div class="card wow wow flipInY" data-wow-duation="3s"" style="width: 18rem;">
         <a href="inscription.php"><img src="images/photo14.jpg" class="card-img-top" alt="..."></a> 
  <div class="card-body">
    <p class="card-text">1 - faire faire le plan de construction pour une maison neuve par un architecte ou un constructeur qui fera faire la construction. Comparez les prix maison architecte / maison constructeur.</p>
  </div>
</div>
      </div>
      <div class="col-sm-4">
          <h3>Choix pour faire un plan de construction:</h3>
        <div class="card wow wow flipInY" data-wow-duation="3s"" style="width: 18rem;">
           <a href="inscription.php"><img src="images/photo10.jpg" class="card-img-top" alt="..."></a>
  <div class="card-body">
    <p class="card-text">1 - faire faire le plan de construction pour une maison neuve par un architecte ou un constructeur qui fera faire la construction. Comparez les prix maison architecte / maison constructeur.</p>
  </div>
</div>
      </div> -->
<!-- 
  <div class="col-sm-4">
       <h3>Choix pour faire un plan de construction:</h3>
        <div class="card wow wow flipInY" data-wow-duation="3s"" style="width: 18rem; height:300; ">
          <a href="inscription.php"><img src="images/photo8.jpg" class="card-img-top" alt="..."></a>
    <div class="card-body">
        <p class="card-text">1 - faire faire le plan de construction pour une maison neuve par un architecte ou un constructeur qui fera faire la construction. Comparez les prix maison architecte / maison constructeur.</p>
      </div>
   </div>
 </div> -->

    </div>
  </div>
  
</section>


   
     
    <footer>
       <p style="padding-top: 100px; margin-left: 0px;
        color: #fff; background:#2D2828; height: 200px;
        opacity: 0.9;"></p>
     </footer>



   
   
</body>
     
</html>