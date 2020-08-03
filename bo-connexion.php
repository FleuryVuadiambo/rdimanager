<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal-back.css">
    <link rel="stylesheet" href="styles-old.css">
    <link rel="stylesheet" href="styles1-old.css">

    <style>

        body:background-image: url('expert.jpg');

    </style>
    <title>Welcome on RDI MANAGER!</title>
  </head>
<body style="background-image: url(expert.jpg)">   
    <?php
      include ('bo-header_co.php');
      ?>

       

       <body id="particles-js"></body>
       
  

<div class="animated bounceInDown">
 
  <div class="container">
    <img class="login" src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
  </img>
    <span class="error animated tada" id="msg"></span>
    <form name="form1" class="box" onsubmit="return checkStuff()">
     
      
        <input type="text" name="email" placeholder="Email" autocomplete="off">
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="Nom" placeholder="Mot de Passe" id="pwd" autocomplete="off">
        <a href="#" class="forgetpass" style="color:white;">Mot de passe oublié ?</a>
        <a href="bo-gestion_societe.php"><input type="submit" value="Connexion" class="btn1"></a>
      </form>
  </div> 
       
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous">
      </script>
      
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
      integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
      crossorigin="anonymous"> 
      </script>

    <script>
     

</script>
  
  </body>
</html>