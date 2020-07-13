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
        td {background-color: whitesmoke; }
        .new_user {text-align: end; }

    </style>
    <title>Maquette 3 (Fleury)</title>
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
    </div> -->

    <div class="container">
            
        <h1 class="text-center m-4">Nouvel utilisateur</h1>
        <p class="text-end mt-4 mb-4">Licences disponibles : <span style="background-color: aquamarine;">03</span></p>

        <table class="table text-center mx-auto m-5">
            <thead>
                <tr class="table table-secondary">
                    <th scope="col" class="text-center">Nom</th>
                    <th scope="col" class="text-center">Prénom</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Rôle</th>
                    <th scope="col" class="text-center">Statut</th>
                    <th scope="col" class="text-center">Date</th>
                    <th scope="col" class="text-center">Nb projets</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">DOE</td>
                    <td class="text-center">John</td>
                    <td class="text-center">john.doe@email.com</td>
                    <td class="text-center">Administrateur</td>
                    <td class="text-center">Actif</td>
                    <td class="text-center"></td>
                    <td class="text-center">0</td>
                </tr>
            </tbody>
        </table>

        <div class="new_user">
            <input type="button" class="btn btn-success" value="Créer un nouvel utilisateur">
        </div>
    
    </div>

    <footer>
        <a href="index2.html"><button> < </button></a>
        <p class="copyright">Copyright Eurêka C.I</p>
        <img class="logofooter" src="img/logo.png" alt="">
        <a href="index3bis.html"><button> > </button></a>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>