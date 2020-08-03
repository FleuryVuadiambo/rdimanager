<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="css/menu-horizontal.css">
    <style>
        /* body {background-color: beige; color: brown; } */
        .container {min-height: 119vh; max-weight: 150vh; }

        h4 {position: relative; left: 16%; }
        form {position: relative; left: 16.4%; }
        .col-sm-8 {max-width: 51.666667%; }
        
        .img_logo {position: absolute; left: 4%; top: 8%; }
        .img_logo img {height: 50px; }     
        .changer_mdp ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active {background: border-box border-box; border-radius: 1%; }
        .btn-success {color: white; background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%); border: none; }
    
    </style>
    
    <title>Maquette 1 (Fleury)</title>
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

            <h1 class="text-center m-4"  style="color: #ce352c;">Nouvel utilisateur</h1>

            <h4 class="mb-4">Saisir les informations</h4>

            <form action="" method="post">

                <div class="form-group row">
                    <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nom">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="prenom">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="mobile">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control bg-light" id="email" placeholder="john.doe@email.com" disabled>
                    </div>
                </div>
                <div class="form-group row" id="nom_societe">
                    <label for="nom_societe" class="col-sm-2 col-form-label" id="nom_societe">Nom de la société</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control  bg-light" id="nom_societe" placeholder="Société 1"  disabled>
                    </div>
                </div>
                <div class="form-group row" id="role">
                    <label for="role" class="col-sm-2 col-form-label">Rôle</label>
                    <div class="col-sm-8">
                        <select id="role" class="form-control  bg-light">
                            <option selected>Utilisateur</option>
                            <option>Administrateur</option>
                            <option>Chef de projet</option>
                            <option>Participant</option>
                            <option>Observateur</option>
                        </select>
                    </div>
                </div>

            </form>

            <div class="text-center button mt-5 mb-4">
                <input type="submit" class="btn btn-secondary" value="Annuler">
                <a href="fo-admin-01.php"><input type="submit" class="btn btn-success" value="Valider">
            </div>
        </div>
    
    <?php
        include ("footer.php");
    ?>
              
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="crossorigin="anonymous"></script>
    <!-- <script src="js/indexbis.js"></script> -->

    <script>
        // document.getElementById('nom_societe').disabled = true;
        // document.getElementById('role').disabled = true;
        $(document).ready(function(){
            $('#modifier').accordion({
                // collapsible : false,
                collapsible : true,
            });
        });
    </script>
  
    

</body>

</html>