<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">

    <style>
        /* body {background-color: beige; color: brown; } */
        .img_logo {position: absolute; left: 4%; top: 8%; }
        .img_logo img {height: 50px; } 
        .container {margin-top: 40px; max-height: 100vh; }
        /* .register {position:relative; left: 13%; } */
        th {color: brown; }
        td {background-color: whitesmoke; }

        label#date_fin.col-sm-4.col-form-label {position: relative; left: 16%; }
    </style>
    <title>Maquette 8 (Fleury)</title>
</head>
<body>
    <?php 
	include ("bo-header.php"); 
	?>
	<?php 
	include ("menu-horizontal.php"); 
	?>

    <!-- <div class="img_logo">
        <img src="img/image001.png" alt="">
    </div> -->
    
        <div class="container">

            <h1 class="text-center mb-5">Ajouter un projet</h1>

            <div class="form-group row">
                <label for="projet" class="col-sm-2 col-form-label">Projet</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="projet" placeholder="Développement IP">
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
                    <select id="inputState" class="form-control">
                        <option selected>En cours</option>
                        <option>Création</option>
                        <option>Terminé</option>
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
                  <input type="text" class="form-control" id="chef_projet" placeholder="Sylvain Clément">
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

            <div class="text-center mt-5 register">
                <a href="fo-projet-01.php"><input type="button" class="btn btn-success" value="Enregistrer">
            </div>
<!-- 
            
            <h2 class="text-center m-4" style="font-size: 2.5em;">Faits marquants</h2>

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

    <footer>
        <a href="index5.html"><button> < </button></a>
        <p class="copyright">Copyright Eurêka C.I</p>
        <img class="logofooter" src="img/logo.png" alt="">
        <a href="index6bis.html"><button> > </button></a>
    </footer>
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>