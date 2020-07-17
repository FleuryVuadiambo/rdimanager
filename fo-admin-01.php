<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">
    <link rel="stylesheet" href="css/elements.css">
    <style>
        .changer_mdp ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active {background: border-box border-box; border-radius: 1%; }
    </style>
    
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


    <title>Maquette 1 (Fleury)</title>
</head>
<body>
    <?php 
	include ("menu BO.php"); 
	?>
	<?php 
	include ("menu-horizontal.php"); 
	?>

    <!-- <div class="img_logo">
        <img src="img/image001.png" alt="">
    </div> -->

        <div class="container">

            <h1 class="text-center m-4">Mon compte</h1>

            <h4 class="mb-4">Activer votre compte RDI Manager</h4>

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
                    <label for="email" class="col-sm-2 col-form-label disabled">Email</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control bg-light" id="email" placeholder="john.doe@email.com">
                    </div>
                </div>
                <div class="form-group row" id="nom_societe">
                    <label for="nom_societe" class="col-sm-2 col-form-label" id="nom_societe">Nom de la société</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control  bg-light" id="nom_societe" placeholder="Société 1">
                    </div>
                </div>
                <div class="form-group row" id="role">
                    <label for="role" class="col-sm-2 col-form-label">Rôle</label>
                    <div class="col-sm-8">
                        <select id="role" class="form-control  bg-light">
                            <option selected>Administrateur</option>
                            <option>Client</option>
                        </select>
                    </div>
                </div>

            </form>

            <div class="text-center button mb-4">
                <input type="submit" class="btn btn-secondary" value="Annuler">
                <input type="submit" class="btn btn-success" value="Valider">
            </div>



            <div id="modifier">
        
                <h4 class="col-md-4 text-center mx-auto mt-4 mb-4">Changer votre mot de passe</h4>

                <form class="changer_mdp" action="" method="post">

                    <div class="form-group row">
                        <label for="mdp" class="col-sm-2 col-form-label">Mot de passe actuel</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="mdp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="new_mdp" class="col-sm-2 col-form-label">Nouveau mot de passe</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="new_mdp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="confirm_mdp" class="col-sm-2 col-form-label">Retapez le mot de passe</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="confirm_mdp">
                        </div>
                    </div>

                    <div class="text-center button mb-4">
                        <input type="submit" class="btn btn-primary" value="Modifier">
                    </div>

                </form>

            </div>

        </div>
    
        <footer>
            <a href="maquette12.html"><button> < </button></a>
            <p class="copyright">Copyright Eurêka C.I</p>
            <img class="logofooter" src="img/logo.png" alt="">
            <a href="index2.html"><button> > </button></a>
        </footer>
              

  
    

</body>

</html>