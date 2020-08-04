<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">
    <!-- <link rel="stylesheet" href="css/Aristo.css"> -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"></script>

    <style>
        #ui-datepicker-div { font-size: 25px; } 
        .calendar {background-color: beige; border: 1px solid black; border-radius: 2em; width: 50%; margin: 25px; padding: 20px; position: relative; left: 23%;  }
        .btn-success {color: white; background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%); border: none; }
    </style>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    


    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
    <!-- <script type="text/javascript" src="js/main.js"></script> -->

    <script>
        $(function() {
            $('#journee').datepicker();
            $('#demi_journee').datepicker();
        });
    </script>
    <title>Mes absences</title>
</head>
<body>
    <?php 
	include ("fo-header.php"); 
    ?>
    
	<?php 
	include ("menu-horizontal.php"); 
    ?>

    <div class="cd-popup1" role="alert">
        
        <div class="calendar text-center">
            <h1 style="color: #ce352c;">Indiquez vos jours d'absence</h1>
            <div class="col-lg" style="margin-top: 30px;">
                Journée <input type="text" id="journee" class="datepicker" name="datepicker"> &nbsp; &nbsp; 
                Demi-journée <input type="text" id="demi_journee" class="datepicker" name="datepicker"></br>   
            </div></br>

            <div class="text-center m-5">
                <a href="fo-tableau-de-bord-01.php"><input type="button" class="btn btn-success" value="Valider">
            </div>
        </div>

    </div>

    <?php   
	include ("footer.php"); 
	?>
</body>
</html>