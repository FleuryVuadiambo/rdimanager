<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {overflow-y: hidden; background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%); color: white; }

        section {height: 837px; display: flex; justify-content: center; }

        .connexion { position: absolute; top: 13%; left: 10%; }
        .img-logo {position: relative; left: 6%; margin-bottom: 12px; }
        .logofooter1 { height: 15vh; width: 15vh; border-radius: 148%; margin-top: 13px; padding-left: 0vh; margin-left: 30px;margin-right: 6px; }

        /* form {border: 2px solid black; border-radius: 1em; min-height: 39vh; } */
        .form-group {position: relative; left: 6%; }
        .forget_mdp, .new_compte {text-align: center; margin: 5px; }
        a:hover {background: none; color: white; text-decoration: white; }

        .presentation {position: absolute; left: 33%; top: 15%; }
        .text {width: 576px; text-align: justify; position: absolute; top: 116px; left: 40px; }

        @media screen and (max-width: 1012px) {
            body {overflow-x: hidden; }
            .connexion {position: relative; left: -1%; }
            .img-logo {position: relative; left: 10%; }
            .presentation { display: none; text-decoration: none;  }
        }
        
    </style>
    <title>Présentation FrontOffice RDI Manager</title>
</head>
<body>
    <section>
        <div class="connexion">
            <div class="img-logo">
                <img class="logofooter1" style="font-size: 2em;" src="logosign.png" alt="">
            </div>
            <form action="" method="post">
                <div class="form-group row">
                    <label for="identifiant" class="col-sm-2 col-form-label">Identifiant</label>
                </div>
                <div class="col-md-12 mb-4">
                    <input type="text" class="form-control" id="identifiant">
                </div>
                <div class="form-group row">
                    <label for="mdp" class="col-sm-6 col-form-label">Mot de passe</label>
                </div>
                <div class="col-md-12">
                  <input type="password" class="form-control" id="nmdp">
                </div>
                <div class="forget_mdp mt-5">
                    <span><a href="#"  style="color: white;">Mot de passe oublié ?</a></span>
                </div>
                <div class="new_compte mb-4">
                    <span><a href="#"   style="color: white;">Créer un compte</a></span>
                </div>
                <div class="connect text-center">
                    <a href="fo-tableau-de-bord.php"><input type="button" class="btn btn-success" value="Connexion"></a>
                </div>
            </form>
        </div>

        <div class="presentation">
            <h1 class="display-4"><img src="Logo-RDI-blanc.png"></h1>

            <div class="text" style="margin-top: 30px; margin-left: 30">
                <p>RDI Manager est une plateforme qui permet de simplifier le suivi des projets de recherche, développement et innovation. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem fugiat numquam ducimus, consectetur sed nobis fugit magnam non quisquam quasi? Cumque amet ducimus sunt veritatis optio architecto odio impedit nihil.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore ad cupiditate, doloremque maxime quas suscipit iure dignissimos, nobis veritatis debitis labore quis, aliquam ex ut harum eveniet quaerat quia at?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident temporibus in reiciendis, magni omnis accusantium aperiam itaque voluptatum quis tempore numquam, optio ducimus harum saepe ipsam nulla repudiandae culpa sequi?</p>
            </div>
        </div>
    </section>

    <?php 
	include ("footer.php"); 
	?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body> 
</html>