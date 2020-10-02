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
    <link rel="stylesheet" href="css/mobiscroll.jquery.min.css">

    <style>
        #ui-datepicker-div { font-size: 25px; } 
        .calendar {background-color: beige; border: 1px solid black; border-radius: 2em; width: 50%; margin: 25px; padding: 20px; position: relative; left: 23%;  }
        .btn-success {color: white; background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%); border: none; }
    </style>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }

        body,
        html {
            height: 100%;
        }
    </style>

    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/mobiscroll.jquery.min.js"></script>


    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    
    <!-- <script>
        $('.date').datepicker({
            multidate: true,
        	format: 'dd-mm-yyyy'
        });
    </script> -->

    
    <script>
        // Ignore this in your implementation
        window.isMbscDemo = true;
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

            <div class="mbsc-col-sm-12 mbsc-col-md-4">
                <div class="mbsc-form-group">
                    <div class="mbsc-form-group-title"> <h2>Journée</h2></div>
                    <div id="demo-multi-day"></div>
                </div>
            </div>

            <div class="mbsc-col-sm-12 mbsc-col-md-4">
                <div class="mbsc-form-group">
                    <div class="mbsc-form-group-title"> <h2>Demi-Journée</h2></div>
                    <div id="demo-multi-day2"></div>
                </div>
            </div>

            <div class="text-center m-5">
                <a href="fo-tableau-de-bord-01.php"><input type="button" class="btn btn-success" value="Valider">
            </div>
        </div>

    </div>

    <script>
        mobiscroll.settings = {
            lang: 'fr',                          // Specify language like: lang: 'pl' or omit setting to use default
            theme: 'ios',                        // Specify theme like: theme: 'ios' or omit setting to use default
                themeVariant: 'light'            // More info about themeVariant: https://docs.mobiscroll.com/4-10-6/calendar#opt-themeVariant
        };

        $(function () {
        
            // Mobiscroll Calendar initialization
            $('#demo-multi-day').mobiscroll().calendar({
                display: 'inline',               // Specify display mode like: display: 'bottom' or omit setting to use default
                select: 'multiple'               // More info about select: https://docs.mobiscroll.com/4-10-6/calendar#opt-select
            });
        });

        mobiscroll.settings = {
            lang: 'fr',                          // Specify language like: lang: 'pl' or omit setting to use default
            theme: 'ios',                        // Specify theme like: theme: 'ios' or omit setting to use default
                themeVariant: 'light'            // More info about themeVariant: https://docs.mobiscroll.com/4-10-6/calendar#opt-themeVariant
        };

        $(function () {
        
            // Mobiscroll Calendar initialization
            $('#demo-multi-day2').mobiscroll().calendar({
                display: 'inline',               // Specify display mode like: display: 'bottom' or omit setting to use default
                select: 'multiple'               // More info about select: https://docs.mobiscroll.com/4-10-6/calendar#opt-select
            });
        });
    </script>

    <?php   
	include ("footer.php"); 
	?>
</body>
</html>