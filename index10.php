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
        .button {text-align: end; }
        table {border-radius: 50%; }
        /* th {background-color: brown; color: whitesmoke; } */
        tr {background-color: brown; color: whitesmoke; }
        td {background-color: whitesmoke; color: black; }
    </style>
    <title>Maquette 14-15 (Fleury)</title>
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

        <h1 class="text-center m-4">Liste des projets</h1>

        <table class="table  text-center mx-auto m-5">
            <thead>
                <tr>
                    <th>PROJETS</th>
                    <th>Date Début</th>
                    <th>Date Fin</th>
                    <th>Statut</th>
                    <th>Nb Participants</th>
                    <th>Nb Faits Marquants</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Développement IP</td>
                    <td>15-02-2020</td>
                    <td></td>
                    <td>En cours</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>

        <div class="button mb-4">
            <input type="button" class="btn btn-success new_project" value="Nouveau Projet">
        </div>

    </div>

    <footer>
        <a href="index9.html"><button> < </button></a>
        <p class="copyright">Copyright Eurêka C.I</p>
        <img class="logofooter" src="img/logo.png" alt="">
        <a href="index11.html"><button> > </button></a>
    </footer>
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>