<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
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

        <title>Liste des fichiers</title>
    </head>

    <body>

        <?php 
        include ("fo-header.php"); 
        ?>

        <?php
        include ("menu-horizontal.php");
        ?>

        <div class="container">

            <h1 class="text-center mt-4 mb-4" style="color: #ce352c;"> Liste des fichiers </h1>
            <table class="table  text-center mx-auto m-5">
                <thead>
                    <tr>
                        <th scope="col" class="">Fichier</th>
                        <th scope="col" class="">Uploader</th>
                        <th scope="col" class="">Date</th>
                        <th scope="col" class="">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">Compte-Rendu-Essais.pdf</td>
                        <td class="text-center">Uploader_User_Name</td>
                        <td class="text-center">2020-08-02 15:36</td>
                        <td class="text-center"><i class="fa fa-cloud-download" aria-hidden="true"></i><i class="fa fa-trash" aria-hidden="true"></i></td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center mx-auto">
                <button class="btn btn-success"href="">Ajouter un fichier <i class="fa fa-cloud-download" style="color: white;" aria-hidden="true"></i></button>
            </div>

        </div>
        
        <?php
        include ("footer.php");
        ?>
            
    </body>
</html>