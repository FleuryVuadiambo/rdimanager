<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">

    <style>
        body {background-color: beige; color: brown; }
        .img_logo {position: absolute; left: 4%; top: 8%; }
        .img_logo img {height: 50px; } 
        .contenu {margin-top: 40px; display: flex; }
        /* .register {position:relative; left: 13%; } */
        .gerer_participants {background-color: rgb(134, 174, 226);}
        th {color: brown; }
        td {background-color: whitesmoke; }

        label#date_fin.col-sm-4.col-form-label {position: relative; left: 16%; }
        /* .new_user {text-align: center; } */
        .overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 50%;
  position: relative;
  transition: all 5s ease-in-out;
}

.valid {text-align: center; margin-top: 20px; }
    </style>
    <title>Maquette 11 (Fleury)</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img class="logoheader" src="img/logohori.png" alt=""></a>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ml-md-auto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Déconnexion</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
	<?php 
	include ("menu-horizontal.php"); 
	?>


   <!-- <div class="img_logo">
        <img src="img/image001.png" alt="">
    </div>  -->

    <div class="contenu">

        <div class="container form">
        
            <div class="form-group row">
                <div class="text-center mx-auto register">
                    <input type="button" class="btn btn-success" value="Enregistrer le projet">
                </div>
            </div>



            <div class="form-group row">
                <label for="projet" class="col-sm-2 col-form-label">Projet</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="projet">
                </div>
            </div>
            <div class="form-group row">
                <label for="titre" class="col-sm-2 col-form-label">Titre</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="titre">
                </div>
            </div>
            <div class="form-group row">
                <label for="statut" class="col-sm-2 col-form-label">Statut</label>
                <div class="col-sm-8">
                    <select id="statut" class="form-control">
                        <option selected>Création </option>
                        <option>...</option>
                    </select>                
                </div>
            </div>

            <div class="form-group row">
                <label for="liste_projets" class="col-sm-2 col-form-label">Résumé</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="liste_projets" rows="3"></textarea>
                </div>    
            </div>

            <div class="form-group row">
                <label for="chef_projet" class="col-sm-2 col-form-label">Chef du projet</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="chef_projet">
                </div>
            </div>
            <div class="form-group row">
                <label for="date_debut" class="col-sm-2 col-form-label">Date de début</label>
                <div class="col-sm-2">
                  <input type="date" class="form-control" id="date_debut">
                </div>
                <label for="date_fin" class="col-sm-4 col-form-label" id="date_fin">Date de fin</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="date_fin">
                </div>
            </div>

        </div>

        <!-- <div class="gestion" style="position: relative; left: -14%;">

            <h5 class="text-center m-4" style="font-size: 2em;">Gérer les participants</h5>    
            
            <table  class="table table-bordered col-md text-center mx-auto m-5">
                <thead>
                    <tr class="gerer_participants">
                        <th style="color:whitesmoke;">Participants</th>
                        <th style="color:whitesmoke;">Rôle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Administrateur</td>
                    </tr>
                </tbody>
            </table>

        </div> -->
        <!-- <h2 class="text-center m-4" style="font-size: 2.5em;">Faits marquants</h2>
        <table class="table table-bordered text-center mx-auto m-5">
            <thead>
                <tr class="table table-warning">
                    <th>Date</th>
                    <th>Auteur</th>
                    <th>Fait</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table> -->
    </div>

        
        <h2 class="text-center m-4" style="font-size: 2.5em;">Faits marquants</h2>
        <table class="table table-bordered col-md-6 text-center mx-auto m-5">
            <thead>
                <tr class="table table-warning">
                    <th>Date</th>
                    <th>Auteur</th>
                    <th>Fait</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>

        </table>

        <div class="text-center new_user">
            <a class="button" href="#popup1"><input type="submit" class="btn btn-success" value="Ajouter un fait marquant"></a>
        </div><br>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2 class="text-center m-4">Projet : <span>Développement IP</span> </h2>
                <a class="close" href="#">&times;</a>
                <div class="col-sm-8 mx-auto">
                    <textarea class="form-control" id="liste_projets" rows="25">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis doloremque voluptate similique tempora eius alias, vitae reprehenderit est, molestiae illum vero consequatur illo quis blanditiis ab nemo consectetur delectus nisi!</textarea>
                </div> 
                
                <div class="valid">
                    <input type="button" class="btn btn-success" value="Valider">
                </div><br>           
            </div>
        </div>  



    <footer>
        <a href="index6bis.html"><button> < </button></a>
        <p class="copyright">Copyright Eurêka C.I</p>
        <img class="logofooter" src="img/logo.png" alt="">
        <a href="index8.html"><button> > </button></a>
    </footer>
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
