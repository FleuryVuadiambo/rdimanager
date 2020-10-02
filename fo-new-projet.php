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
        .container {margin-top: 40px; min-height: 100vh; }
        /* .register {position:relative; left: 13%; } */
        th {color: brown; }
        td {background-color: whitesmoke; }

        label#date_fin.col-sm-4.col-form-label {position: relative; left: 16%; }
        .btn-success {color: white; background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%); border: none; }
    </style>
    <title>Ajouter votre projet</title>
</head>
<body>
    <?php 
	include ("fo-header.php"); 
	?>
	<?php 
	include ("menu-horizontal.php"); 
	?>

    <!-- <div class="img_logo">
        <img src="img/image001.png" alt="">
    </div> -->
    
        <div class="container">

            <h1 class="text-center mb-5"  style="color: #ce352c;">Ajouter un projet</h1>

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

            <!-- <div class="form-group row">
                <label for="statut" class="col-sm-2 col-form-label">Statut</label>
                <div class="col-sm-8">
                    <select id="inputState" class="form-control">
                        <option selected>En cours</option>
                        <option>Création</option>
                        <option>Terminé</option>
                    </select>                
                </div>
            </div> -->

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

            <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Type de projet</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                      Projet en collaboration avec au moins un partenaire externe
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                      Projet en collaboration avec un partenaire universitaire
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios3" value="option3">
                      <label class="form-check-label" for="gridRadios3">
                      Projet réalisé en interne par la société (avec ou sans prestataires)
                      </label>
                    </div>
                  </div>
                </div>
            </fieldset>


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

                        <!-- <div class="form-group row">
            <label for="type_projet" class="col-sm-2 col-form-label">Type de projet</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Projet en collaboration avec au moins un partenaire externe</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2">Projet en collaboration avec un partenaire universitaire</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                  <label class="form-check-label" for="inlineCheckbox3">Projet réalisé en interne par la société (avec ou sans prestataires)</label>
                </div>
            </div> -->

        </div>

    <?php
    include("footer.php");
    ?>
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>