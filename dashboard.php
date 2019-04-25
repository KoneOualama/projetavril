<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    
    
<header>
  <div class="container bg-info p-5 ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">ThreeBoy's</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="service.php">Service<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="galerie.php">Galerie</a>
        </div>
      </div>
    </nav>
  </div>
</header>
<!---->
<main>
<div class="container my-5">
       <div class="card-body text-center">
    <h4 class="card-title" style="color: #fff;">Titre spécial traitement</h4>
    <p class="card-text" style="color: #fff;">Avec le texte d'appui ci-dessous comme introduction naturelle à du contenu supplémentaire.</p>
  </div>
    <div class="card">
        <button id="add__new__list" type="button" class="btn btn-success position-absolute" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add a new List</button>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Code</th>
                <th scope="col">Edit List</th>
                <th scope="col">Information</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="#"><i class="far fa-edit"></i> edit</a>
                    <a class="btn btn-sm btn-danger" href="#"><i class="fas fa-trash-alt"></i> delete</a>    
                </td>
                <td><a class="btn btn-sm btn-info" href="#"><i class="fas fa-info-circle"></i> Details</a> </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="#"><i class="far fa-edit"></i> edit</a>
                    <a class="btn btn-sm btn-danger" href="#"><i class="fas fa-trash-alt"></i> delete</a>    
                </td>
                <td><a class="btn btn-sm btn-info" href="#"><i class="fas fa-info-circle"></i> Details</a> </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>       
                    <a class="btn btn-sm btn-primary" href="#"><i class="far fa-edit"></i> edit</a>
                    <a class="btn btn-sm btn-danger" href="#"><i class="fas fa-trash-alt"></i> delete</a> 
                </td>
                <td><a class="btn btn-sm btn-info" href="#"><i class="fas fa-info-circle"></i> Details</a> </td>
              </tr>
            </tbody>
          </table>
    </div>
    <!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="card-body text-center">
            <h4 class="card-title">Titre spécial traitement</h4>
            <p class="card-text">Avec le texte d'appui ci-dessous comme introduction naturelle à du contenu supplémentaire.</p>
          </div>
            <div class=" card col-8 offset-2 my-2 p-3">
          <form>
            <div class="form-group">
              <label for="nom de le list">Nom de la liste</label>
              <input type="text" class="form-control" name="listname" id="listname" placeholder="Enter your listname">
            </div>
            <div class="form-group">
              <label for="datepicker">Deadline</label>
              <input  type="text" class="form-control" name="datepicker" id="datepicker" placeholder="Pick up a date">
            </div>
            <div class="form-group">
                                    <label for="datepicker">Add a list item</label>
                <div class="input-group">

                  <input type="text" class="form-control" placeholder="Add an item" aria-label="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
           <div class="form-group text-center">
             <button type="submit" class="btn btn-block btn-primary">Sign in</button>
          </div>
        </form>
    </div>
    </div>
  </div>
</div>
</div>
</main>
<!---->

<!---->
<footer >
  <div class="container bg-info p-5">

  </div>
</footer>

</body>
</html>