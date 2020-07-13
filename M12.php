<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="styles.css">
    <title>Hello, world!</title>
  </head>
  <body>

    

    <!-- Navbar -->
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

        <!-- Formulaire -->
        <form class="form6" action="" method="post">

            <h3 class="societegerer1" style="color: red;text-decoration: underline;">Utilisateurs Back 0ffice :</h3>
            <div class="form-group row">
                <label for="nom_societe" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nom_societe" placeholder="CLEMENT">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Prénom</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="email" placeholder="Sylvain">
                </div>
            </div>

            <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="licence" placeholder="sclment@eurekaci.com">
                  </div>
            </div>

            <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">Rôle</label>
                <div class="col-sm-8">
                    <select id="inputState" class="form-control">
                        <option>Utilisateur</option>
                        <option selected>Administrateur</option>
                        <option>Client</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">Statut</label>
                <div class="col-sm-8">
                    <select id="inputState" class="form-control">
                        <option selected>Actif</option>
                        <option>Inactif</option>
                        <option>Crée</option>
                    </select>
                </div>
            </div>
        
        <div class="text-center button">
            <input type="submit" class="btn btn-secondary" value="Annuler">
            <input type="submit" class="btn btn-secondary" style="background-color: green;" value="Enregistrer">
        </div>
        </form>        

    <footer>
      <a href="M10.html"><button><</button></a>
      <p class="copyright">Copyright Eurêka C.I</p>
      <img class="logofooter" src="img/logosign.png" alt="">
      <a href="M13.html"><button>></button></a>
  </footer>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>