<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css"> 
    <link rel="stylesheet" href="css/menu-horizontal.css">
    
    <style>
        /* body {background-color: beige; color: brown; } */
        .img_logo {position: absolute; left: 4%; top: 8%; }
        .img_logo img {height: 50px; }
        .container {margin-top: 40px; }
        .valid {text-align: center; }
    </style>
    <title>Maquette 12</title>
</head>
<body>
    <section class="corps-body">
    
        <div class="blanc"></div>
    
        <?php 
	    include ("menu BO.php"); 
	    ?>

	    <?php 
	    include ("menu-horizontal.php"); 
	    ?>

    <!-- <div class="img_logo">
        <img src="img/image001.png" alt="">
    </div> -->

        <div class="container" style="background-color: beige; min-height: 532px; border-radius: 2%;">
            <h1 class="text-center m-4">Projet : <span>Développement IP</span> </h1>
            <div class="form-group row">
                <label for="liste_projets" class="col-sm-2 col-form-label" style="font-size: 1em;">Ajouter votre fait marquant : </label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="liste_projets" rows="25">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis doloremque voluptate similique tempora eius alias, vitae reprehenderit est, molestiae illum vero consequatur illo quis blanditiis ab nemo consectetur delectus nisi!</textarea>
                </div>    
            </div>

            <div class="valid">
                    <a href="fo-projet-02.php"><input type="button" class="btn btn-success" value="Valider">
            </div><br>
        </div>

            <div class="blanc"></div>

    </section>

    <footer>
        <a href="index7bis.html"><button> < </button></a>
        <p class="copyright">Copyright Eurêka C.I</p>
        <img class="logofooter" src="img/logo.png" alt="">
        <a href="index9.html"><button> > </button></a>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>