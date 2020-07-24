<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <style>
        body {overflow-y: hidden; }

        section {height: 837px; display: flex; justify-content: center; }

        .connexion { position: absolute; top: 13%; left: 10%; }
        .img-logo {position: relative; left: 28%; margin-bottom: 12px;; }

        form {border: 2px solid black; border-radius: 1em; min-height: 39vh; }
        .form-group {position: relative; left: 6%; }
        .forget_mdp, .new_compte {text-align: center; margin: 5px; }

        .presentation {position: absolute; left: 33%; top: 15%; }
        .text {width: 576px; text-align: justify; position: absolute; top: 116px; }

        footer {position: fixed; bottom: 78px; width: 100%; padding-top: 67px; height: 35px; }
        .copyright {background-color: brown; color: white; margin-top: 3vh; font-family: monospace; font-size: larger; text-align: center; padding: 15px; }
    </style>
    <title>Présentation RDI Manager - Connexion</title>
</head>
<body>
    <section>
        <div class="connexion">
            <div class="img-logo">
                <img src="logosign.png" alt="">
            </div>
            <form action="" method="post">
                <div class="form-group row">
                    <label for="identifiant" class="col-sm-2 col-form-label">Identifiant</label>
                </div>
                <div class="col-sm-12 mb-4">
                    <input type="text" class="form-control" id="identifiant">
                </div>
                <div class="form-group row">
                    <label for="mdp" class="col-sm-6 col-form-label">Mot de passe</label>
                </div>
                <div class="col-sm-12">
                  <input type="password" class="form-control" id="nmdp">
                </div>
                <div class="forget_mdp mt-5">
                    <span><a href="#">Mot de passe oublié ?</a></span>
                </div>
                <div class="new_compte mb-4">
                    <span><a href="#">Créer un compte</a></span>
                </div>
                <div class="connect text-center">
                    <a href=""><input type="button" class="btn btn-success" value="Connecter"></a>
                </div>
            </form>
        </div>

        <div class="presentation">
            <h1 class="display-4">RDI Manager Plateforme</h1>

            <div class="text">
                <p>RDI Manager est une plateforme qui permet de simplifier le suivi des projets de recherche, développement et innovation. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem fugiat numquam ducimus, consectetur sed nobis fugit magnam non quisquam quasi? Cumque amet ducimus sunt veritatis optio architecto odio impedit nihil.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore ad cupiditate, doloremque maxime quas suscipit iure dignissimos, nobis veritatis debitis labore quis, aliquam ex ut harum eveniet quaerat quia at?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident temporibus in reiciendis, magni omnis accusantium aperiam itaque voluptatum quis tempore numquam, optio ducimus harum saepe ipsam nulla repudiandae culpa sequi?</p>
            </div>
        </div>
    </section>

    <footer>
        <!-- <a href="index7.html"><button> < </button></a> -->
        <p class="copyright">Copyright Eurêka C.I</p>
        <img class="logofooter" src="img/logo.png" alt="">
        <!-- <a href="index8.html"><button> > </button></a> -->
    </footer>
</body>
</html>