<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">
    <link rel="stylesheet" href="css/popup.css">
    
    <style>
        body {overflow: hidden; }
        .img_logo {position: absolute; left: 4%; top: 8%; }
        .img_logo img {height: 50px; }
        i {color: black; }
        form {position: relative; left: 35%; }
        li: frist-child a {background-color:  #ce352c; }
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script>
    jQuery(document).ready(function($){
    	//open popup
    	$('.cd-popup-trigger').on('click', function(event){
    		event.preventDefault();
    		$('.cd-popup').addClass('is-visible');
    	});
    
    	//close popup
    	$('.cd-popup').on('click', function(event){
    		if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
    			event.preventDefault();
    			$(this).removeClass('is-visible');
    		}
    	});
    	//close popup when clicking the esc keyboard button
    	$(document).keyup(function(event){
        	if(event.which=='27'){
        		$('.cd-popup').removeClass('is-visible');
    	    }
        });
    });   
    </script>

    <title>Saisie de temps passé</title>
</head>
<body>
    <?php 
	include ("fo-header.php"); 
	?>
	<?php 
	include ("menu-horizontal.php"); 
	?>

    <!-- <div class="img_logo">
        <img src="img/image001.png" alt="">
    </div> -->

    <div class="container">
        <h1 class="text-center m-4">Saisie de temps passé</h1>
        <p class="text-center m-4" style="font-size: 1.5em;"><a href="#"><img src="https://img.icons8.com/android/24/000000/arrow-pointing-left.png"/></a> Mai <a href="#"><img src="https://img.icons8.com/android/24/000000/arrow.png"/></i></a></p>

            <form action="" method="post">

                <div class="form-group row">
                    <label for="developpement" class="col-sm-2 col-form-label">Développement IP</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="developpement">
                    </div> 
                    %
                </div>
                <div class="form-group row">
                    <label for="projet2" class="col-sm-2 col-form-label">Projet 2</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="projet2">
                    </div>  %
                </div>
                <div class="form-group row">
                    <label for="projet3" class="col-sm-2 col-form-label">Projet 3</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="projet3">
                    </div>  %
                </div>
        
            </form>

        
        <div class="button text-center">
            <!-- <input type="submit" class="btn btn-secondary" value="Annuler"> -->
            <a href="#0"><input type="submit" class="btn btn-success cd-popup-trigger" value="Mettre à jour"></a>
        </div>

        <div class="cd-popup" role="alert">
	        <div class="cd-popup-container" style="top: 18%;">
		        <p>Avez-vous été absent durant cette période ?</p>
		        <ul class="cd-buttons">
		    	    <li><a href="fo-temps-01.php">Non</a></li>
		    	    <li><a href="fo-absences.php">Oui</a></li>
		        </ul>
		        <a href="#0" class="cd-popup-close img-replace">Close</a>
	        </div> <!-- cd-popup-container -->
        </div> <!-- cd-popup -->
    
    </div>

    <footer>
        <!-- <a href="index12.html"><button> < </button></a> -->
        <p class="copyright">Copyright Eurêka C.I</p>
        <img class="logofooter" src="logo.png" alt="">
        <!-- <a href="index14.html"><button> > </button></a> -->
    </footer>

</body>
</html>