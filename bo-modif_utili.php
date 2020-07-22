<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal-Back.css">
    <link rel="stylesheet" href="styles-old.css">
    <title>Hello, world!</title>
  </head>
  <body>
   
      
    <?php
      include ('bo-header.php');
      ?>

      <?php 
        include ("bo-menu-horizontal.php"); 
        ?>
            
      <br>

        <!-- Formulaire -->
        <h2>Modifier un Utilisateur</h2>

        <form class="form6" action="" method="post">

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
          <a href="bo-gestion_utili.php"><button type="button" class="btn btn-secondary">Annuler</button></a>
            <a href="bo-gestion_utili.php"><button type="button" class="btn btn-success">Modifier</button></a>
        </div>
        </form>        

    <footer>
      <p class="copyright">Copyright Eurêka C.I</p>
      <img class="logofooter" src="img/logosign.png" alt="">
  </footer>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>