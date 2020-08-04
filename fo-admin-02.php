<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">
    
    <style>
        /* body {background-color: beige; color: brown; } */
        .img_logo {position: absolute; left: 4%; top: 8%; }
        .img_logo img {height: 50px; }
        .container {margin-top: 40px; }

        .table thead th {background-color: #ce352c; color: white; }
        tr, td {background-color: #e6e6e6; }
        .edit-delete1 {position: absolute; top: 42%; left: 83%; }
        .edit-delete2 {position: absolute; top: 38%; left: 83%; }
        .new_user {text-align: center; }
        .edit-delete1, .edit-delete2 {display: flex; }
        .btn-success {color: white; background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%); border: none; }

    </style>
    <title>Liste des utilisateurs</title>
</head>
<body>
    <?php 
	include ("fo-header.php"); 
	?>
	<?php 
	include ("menu-horizontal.php"); 
	?>

<!-- 
    <div class="img_logo">
        <img src="img/image001.png" alt="">
    </div> -->

    <div class="container">
          
        <h1 class="text-center m-4" style="color: #ce352c;">Liste des utilisateurs</h1>
        <p class="text-end mt-4 mb-4">Licences disponibles : <span>03</span></p>
        

        <table class="table text-center mx-auto m-5"  style="max-width: 80%;">
            <thead>
                <tr class="table table-secondary">
                    <th scope="col" class="text-center">N°</th>
                    <th scope="col" class="text-center">Nom</th>
                    <th scope="col" class="text-center">Prénom</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Rôle</th>
                    <th scope="col" class="text-center">Statut</th>
                    <th scope="col" class="text-center">Date</th>
                    <th scope="col" class="text-center">Nb projets</th>
                    <!-- <th scope="col" class="text-center">Modifier</th>
                    <th scope="col" class="text-center">Supprimer</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">DOE</td>
                    <td class="text-center">John</td>
                    <td class="text-center">john.doe@email.com</td>
                    <td class="text-center">Administrateur</td>
                    <td class="text-center">Actif</td>
                    <td class="text-center"></td>
                    <td class="text-center">0</td>
                    <td style="background: white; border: white;"><div><a href="fo-admin-01.php"><img src="https://img.icons8.com/small/36/000000/edit.png"/></a></div></td>
                    <td style="background: white; border: white;"><div><a href="#"><img onclick="confirm" class="delete" src="https://img.icons8.com/small/36/000000/filled-trash.png"/></a></div></td>
                </tr>
                <tr>
                    <td scope="col" class="text-center">2</td>
                    <td class="text-center">Dujardin</td>
                    <td class="text-center">Jean</td>
                    <td class="text-center"></td>
                    <td class="text-center">Utilisateur</td>
                    <td class="text-center">Créé</td>
                    <td class="text-center"></td>
                    <td class="text-center">0</td>
                    <td style="background: white; border: white;"><div><a href="fo-admin-01.php"><img src="https://img.icons8.com/small/36/000000/edit.png"/></a></div></td>
                    <td style="background: white; border: white;"><div><a href="#"><img onclick="confirm" class="delete" src="https://img.icons8.com/small/36/000000/filled-trash.png"/></a></div></td>
                </tr>
            </tbody>

        </table>

        <div class="new_user">
            <a href="fo-admin-03.php"><input type="button" class="btn btn-success" value="Ajouter un utilisateur">
        </div>

    </div>

    <?php
    include("footer.php");
    ?>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>