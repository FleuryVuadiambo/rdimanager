<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome6/css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">
    <link rel="stylesheet" href="css/elements.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <style>
        a:hover {text-decoration: none; color: linear-gradient(to bottom, #729EBF 0%, #333A40 100%); }
        h1, td a {color: black; }
        .table thead th {background-color: #ce352c; color: white; }
        tr, td {background-color: #e6e6e6; }
    </style>

    <title>Liste des projets</title>
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

        <!-- <h1>&nsbp </h1> -->
        <h1 class="text-center mt-5 mb-4">Mes projets de l'année : <| 2020 |> <a href="#" style="font-size: smaller;"></h1>
        <table class="table  text-center mx-auto m-5">
            <thead>
                <tr>
                    <th scope="col" class="">PROJETS</th>
                    <th scope="col" class="">Début</th>
                    <th scope="col" class="">Fin</th>
                    <th scope="col" class="">Statut</th>
                    <th scope="col" class="">Participants</th>
                    <th scope="col" class="">Faits Marquants</th>
                    <th scope="col" class="">CIR / CII</th>
                    <th scope="col" class="">Mes Heures</th>
                    <th scope="col" class="">Heures équipe</th>
                </tr>
            </thead>
            <tbody>
                <tr style="color: #e6e6e6;">
                    <td scope="row" class="text-center"><a href ="fo-projet-02.php">Développement ID</a></td>
                    <td class="text-center">15-02-2020</td>
                    <td class="text-center"></td>
                    <td class="text-center">En cours</td>
                    <td class="text-center">1</td>
                    <td class="text-center">5</td>
                    <td class="text-center">oui</td>
                    <td class="text-center">70</td>
                    <td class="text-center">270</td>
                </tr>
                <!-- <tr>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                </tr> -->
            </tbody>
        </table>

        <div class="button mb-4">
            <a href="fo-new-projet.php"><input type="button" class="btn btn-success new_project" value="Nouveau Projet">
        </div>

    </div>

    <?php
    include("footer.php");
    ?>


</body>

</html>