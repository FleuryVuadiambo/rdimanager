<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome6/css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">
    
    <style>
        /* body {background-color: white; color: brown; } */
        .img_logo {position: absolute; left: 4%; top: 8%; }
        .img_logo img {height: 50px; }
        i {color: black; }
        tr, td {background-color: whitesmoke; }
        /* .button {text-align: end; } */

    </style>
    <title>Maquette 20 (Fleury)</title>
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
            
            <h1 class="text-center mt-4 mb-4"> Projets sur l'année  <| 2020 |> <a href="#" style="font-size: smaller;"></h1>
             <!--   <h4 class="text-center"><a><i class="fas fa-arrow-alt-circle-left"></i></a> <| 2020 |> <a href="#"><i class="fas fa-arrow-alt-circle-right"></i></a></h4>
-->

            <table class="table table-bordered mx-auto m-5">
                <thead>
                    <tr class="table table-secondary">
                        <th scope="col" class="text-center">TABLEAU DE BORD</th>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col" class="text-center">Equipe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center">Nombre de projets de l'année en cours</th>
                        <td class="text-center">1</td>
                        <td class="text-center">1</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Nombre de projets de type CIR-CII</th>
                        <td class="text-center">1</td>
                        <td class="text-center">0</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Temps total passé en  heures</th>
                        <td class="text-center">70</td>
                        <td class="text-center">70</td>
                    </tr>
                </tbody>
            </table>
        
            <div class="button text-center m-4">
                <input type="button" class="btn btn-success" value="Mettre à jour votre feuille de temps">
            </div>

        </div>

        <footer>
            <a href="index14.html"><button> < </button></a>
            <p class="copyright">Copyright Eurêka C.I</p>
            <img class="logofooter" src="img/logo.png" alt="">
            <a href="M1.html"><button> > </button></a>
            <!-- <a href="index4.html"><button> > </button></a> -->
        </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>