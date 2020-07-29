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
        /* .changer_mdp ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active {background: border-box border-box; border-radius: 1%; } */
        .container {min-height: 86vh; }
        form {position: relative; left: 16%; }
        .text-center {justify-content: space-between; }
        .btn-success1 {color: white; background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%); border: none; }
        .col-sm-8 {max-width: 51.666667%; }

        .change_mdp {position: relative; right: 28%; }

        .button {display: flex;  justify-content: space-between; position: relative; left: 12%; }
        .update {position: relative; left: 4%; }

        .overlay {position: fixed; top: 0; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.7); transition: opacity 500ms; visibility: hidden; opacity: 0; }
        .overlay:target {visibility: visible; opacity: 1; }

        #popup2 {position: fixed; z-index: 5; }
        #popup1 {position: fixed; z-index: 5; }
        .popup {margin: 70px auto; padding: 20px; background: #fff; border-radius: 5px; width: 50%; position: relative; transition: all 5s ease-in-out; top: 19%; }
        .close {position: absolute; top: 5%; right: 3%; font-size: xx-large; }
        .valid {text-align: center; margin-top: 20px; }
    </style>
    
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="crossorigin="anonymous"></script>
    <!-- <script src="js/indexbis.js"></script> -->

    <!-- <script>
        // document.getElementById('nom_societe').disabled = true;
        // document.getElementById('role').disabled = true;
        $(document).ready(function(){
            $('#modifier').accordion({
                // collapsible : false,
                collapsible : true,
            });
        });
    </script> -->

    <title>Mon compte RDI Manager</title>
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

            <h1 class="text-center m-4">Mon compte</h1>

            <!-- <h4 class="mb-4">Activer votre compte RDI Manager</h4> -->

            <form action="" method="post">
                <div class="form-group row">
                    <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nom" placeholder="DOE" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="prenom" placeholder="John"  disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="mobile"placeholder="09 90 89 99 09"  disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="email" placeholder="john.doe@email.com" disabled>
                    </div>
                </div>
                <div class="form-group row" id="nom_societe">
                    <label for="nom_societe" class="col-sm-2 col-form-label" id="nom_societe">Nom de la société</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nom_societe" placeholder="Société 1" disabled>
                    </div>
                </div>
                <div class="form-group row" id="role">
                    <label for="role" class="col-sm-2 col-form-label">Rôle</label>
                    <div class="col-sm-8">
                        <select id="role" class="form-control" disabled>
                            <option selected>Administrateur</option>
                            <option>Chef de projet</option>
                            <option>Participant</option>
                            <option>Observateur</option>
                        </select>
                    </div>
                </div>
            </form>

            <div class="button mt-5 mb-4">
                <!-- <input type="submit" class="btn btn-secondary" value="Annuler"> -->
                <div class="update">
                    <a href="#popup2"> <input type="update" class="btn btn-success" value="Mettre à jour"> </a>
                </div>
                <div class="change_mdp">
                    <a href="#popup1"><input type="button" class="btn btn-success1" value="Modifier votre mot de passe"> </a>
                </div>
            </div>

            <!-- <div id="modifier"> -->
        
            <!-- <div class="button text-center m-4">
                <a href="fo-temps-01.php"><input type="button" class="btn btn-success1" value="Modifier votre mot de passe">
            </div> -->

        <div id="popup2"  class="overlay">
            <div class="popup">
                <a class="close2" href="#">&times;</a> 
                <div class="col-lg text-center mx-auto">    
                    <form method="post">

                        <div class="form-group row">
                            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="nom" placeholder="DOE" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="prenom" placeholder="John"  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="mobile"placeholder="09 90 89 99 09"  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="email" placeholder="john.doe@email.com" >
                            </div>
                        </div>
                        <div class="form-group row" id="nom_societe">
                            <label for="nom_societe" class="col-sm-2 col-form-label" id="nom_societe">Nom de la société</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="nom_societe" placeholder="Société 1" >
                            </div>
                        </div>
                        <div class="form-group row" id="role">
                            <label for="role" class="col-sm-2 col-form-label">Rôle</label>
                            <div class="col-sm-8">
                                <select id="role" class="form-control" >
                                    <option selected>Administrateur</option>
                                    <option>Chef de projet</option>
                                    <option>Participant</option>
                                    <option>Observateur</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="update text-center mt-5">
                        <a href="fo-admin-01.php"> <input type="update" class="btn btn-primary" value="Modifier"> </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="popup1" class="overlay">
            <div class="popup">
                <!-- <h2 class="text-center m-4">Projet : <span>Développement IP</span> </h2> -->
                <a class="close" href="#">&times;</a>
                <div class="col-lg mx-auto">
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
                    </form> 
                    <div class="valid">
                        <a href="fo-projet-02.php"><input type="button" class="btn btn-primary" value="Modifier"></a>
                    </div><br> 
                </div> 
            </div>
        </div>
    </div> <br>

        <!-- </div> -->
    
        <footer>
            <!-- <a href="maquette12.html"><button> < </button></a> -->
            <p class="copyright">Copyright Eurêka C.I</p>
            <img class="logofooter" src="logo.png" alt="">
            <!-- <a href="index2.html"><button> > </button></a> -->
        </footer>
              

  
    

</body>

</html>