<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Maquette 3</title>
  </head>
  <body>
      
    <nav class="navbar navbar-expand-lg ">
      <div>
        <a class="navbar-brand" href="#"><img class="logoheader" src="img/logohori.png" alt=""></a>
        <p class="titre">RDI Manager</p>
      </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Société <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Utilisateur</a>
            </li>
          </ul>
          <ul style="list-style-type: none;">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ml-md-auto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="connexion.html">Déconnexion</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <br>
      
         <h2>Liste des Sociétées:</h2>

         <table class="table text-center mx-auto m-5">
          <thead>
              <tr class="table table-secondary">
                  <th scope="col" class="text-center">Société</th>
                  <th scope="col" class="text-center">NB Licences</th>
                  <th scope="col" class="text-center">NB Licences utilisées</th>
                  <th scope="col" class="text-center">Statut</th>
                  <th scope="col" class="text-center">Date/Heure</th>
                  <th scope="col" class="text-center">Gestionnaire</th>
                  <th scope="col" class="text-center">Supprimer </th>
                  <th scope="col" class="text-center">Modifier</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              </tr>
          </tbody>
      </table>


       <a href="M2.html"><button type="button" class="btn btn-success">Ajouté</button></a>

        <footer>
          <a href="M2.html"><button><</button></a>
          <p class="copyright">Copyright Eurêka C.I</p>
          <img class="logofooter" src="img/logo.png" alt="">
          <a href="M4.html"><button>></button></a>
      </footer>
    

      


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>