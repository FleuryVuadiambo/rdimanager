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


    <title>Liste des projets</title>
</head>

<body>

    <?php 
	include ("menu BO.php"); 
	?>

    <?php
    include ("header.php");
    include ("menu-horizontal.php");
    ?>


    <!-- <div class="img_logo">
        <img src="img/image001.png" alt="">
    </div> -->

    <div class="container">

        <h1>&nsbp </h1>
        <h2 class="text-center mt-4 mb-4">Mes projets sur l'année : <| 2020 |>
        </h2>
        <table class="table   text-center mx-auto m-5">
            <thead>
                <tr>
                    <th scope="col" class="text-center">PROJETS</th>
                    <th scope="col" class="text-center">Début</th>
                    <th scope="col" class="text-center">Fin</th>
                    <th scope="col" class="text-center">Statut</th>
                    <th scope="col" class="text-center">Partcipants</th>
                    <th scope="col" class="text-center">Faits Marquants</th>
                    <th scope="col" class="text-center">CIR / CII</th>
                    <th scope="col" class="text-center">Mes Heures</th>
                    <th scope="col" class="text-center">Heures équipe</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" class="text-center">Développement ID</td>
                    <td class="text-center">15-02-2020</td>
                    <td class="text-center"></td>
                    <td class="text-center">En cours</td>
                    <td class="text-center">1</td>
                    <td class="text-center">1</td>
                    <td class="text-center">oui</td>
                    <td class="text-center">70</td>
                    <td class="text-center">270</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                    <td scope="row" class="text-center"></td>
                </tr>
            </tbody>
        </table>

        <div class="button mb-4">
            <a href="index6.php"><input type="button" class="btn btn-success new_project" value="Nouveau Projet">
        </div>

    </div>

    <?php
    include("footer.php");
    ?>


</body>

</html>