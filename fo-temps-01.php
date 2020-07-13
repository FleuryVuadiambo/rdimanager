<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome6/css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">
    
    <style>
        body {background-color: beige; color: brown; }
        .img_logo {position: absolute; left: 4%; top: 8%; }
        .img_logo img {height: 50px; }
        i {color: black; }
        form {position: relative; left: 35%; }
    </style>
    <title>Maquette 18 (Fleury)</title>
</head>
<body style="overflow: hidden;">
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
    </div> -->

    <div class="container">
        <h1 class="text-center m-4">Saisie de temps passé</h1>
        <p class="text-center m-4" style="font-size: 1.5em;"><a href="#"><i class="fas fa-long-arrow-alt-left"></i></a> Mai <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a></p>

            <form action="" method="post">

                <div class="form-group row">
                    <label for="developpement" class="col-sm-2 col-form-label">Développement IP</label>
                    <div class="col-sm-2">
                      <input type="number" class="form-control" id="developpement"> %
                    </div>
                </div>
                <div class="form-group row">
                    <label for="projet2" class="col-sm-2 col-form-label">Projet 2</label>
                    <div class="col-sm-2">
                      <input type="number" class="form-control" id="projet2"> %
                    </div>
                </div>
                <div class="form-group row">
                    <label for="projet3" class="col-sm-2 col-form-label">Projet 3</label>
                    <div class="col-sm-2">
                      <input type="number" class="form-control" id="projet3"> %
                    </div>
                </div>
        
            </form>

        
        <div class="button text-center">
            <input type="submit" class="btn btn-lg btn-secondary" value="Annuler">
            <input type="submit" class="btn btn-lg btn-success" value="Valider">
        </div>

    </div>

    <footer>
        <a href="index12.html"><button> < </button></a>
        <p class="copyright">Copyright Eurêka C.I</p>
        <img class="logofooter" src="img/logo.png" alt="">
        <a href="index14.html"><button> > </button></a>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>