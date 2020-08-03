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
    <title>Hello, world!</title>
  </head>
  <body>
   
    <?php
      include ('bo-header.php');
      ?>

      <?php 
	include ("bo-menu-horizontal.php"); 
	?>
      
      
      <br>
<section>
      <h2>Modifier une Société</h2>     

     <img src="societe1.png" alt="" class="logosociete";>

      <form class="form4" action="" method="post">

        <div class="form-group row">
            <label for="nom_societe" class="col-sm-2 col-form-label">Nom de la société</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nom_societe" placeholder="Société 1">
            </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">SIRET</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="email" placeholder="123456789123">
          </div>
       </div>

        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Référent Société</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="email" placeholder="réferent@societe1.com">
            </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Mobile</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" id="email" placeholder="06 88 77 55 21">
          </div>
        </div>
      
      <div class="form-group row">
                <label for="nom_societe" class="col-sm-2 col-form-label">Référent Back Office</label>
                <div class="col-sm-10">
                  <select name="nom">
                      <option>Kevin</option>
                      <option>Sylvain</opotion>
                      <option>Yanny</option>
                      <option>Abder</option>
                      <option>Fleury</option>
                    </select>
                </div>
              </div>

        <div class="form-group row">
            <label for="role" class="col-sm-2 col-form-label">statut</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="licence" placeholder="crée">
              </div>
        </div>

        <div class="form-group4" style="margin-left: 92px;" >
                <label for="statut" class="col-sm-2 col-form-label">NB de Licences</label>
                <div class="col-sm-1">
                  <input type="" class="form-control" id="statut" placeholder="5">
                </div>
  
          <label for="statut" class="col-sm-2 col-form-label">NB de Licences disponibles</label>
          <div class="col-sm-1">
            <input type="" class="form-control" id="statut" placeholder="5">
          </div>
        </div>
    
        <div class="text-center button" style="margin: 0 auto;">
           <a href="bo-gestion_societe.php"><button type="button" class="btn btn-secondary">Annuler</button></a>
            <a href="bo-gestion_societe.php"><button type="button" class="btn btn-success">Enregister</button></a>
        </div>

    </form>        



    </div>
      
         
  </section>


        <footer>
          <p class="copyright">Copyright Eurêka C.I</p>
          <img class="logofooter" src="logosign.png" alt="">
      </footer>

    
 
      


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>