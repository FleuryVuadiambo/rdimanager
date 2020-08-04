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
    <title>RDI MANAGER PLATEFORME!</title>
  </head>
  <body>
   
    <?php
      include ('bo-header.php');
      ?>

      <?php 
	include ("bo-menu-horizontal.php"); 
	?>

    <h1 style="color: #ce352c;">Licences Distribuées</h1>

      <table class="table text-center mx-auto m-5">
        <thead>
          <tr class="table table-secondary">
            <th scope="col" class="text-center">Société</th>
            <th scope="col" class="text-center">Personne</th>
            <th scope="col" class="text-center">Statut</th>
            <th scope="col" class="text-center">Action</th>
            <th scope="col" class="text-center">Statut</th>
          </tr>
        </thead>

          <tbody style="text-align: center;">
            <tr>
              <td class="text-center">Bloom Art Work</td>
              <td class="text-center">referent@societe1.com</td>
              <td class="text-center">Invitation Envoyée</td>
              <td class="text-center">Supprimer</td>
              <td class="text-center">Actif</td>
            </tr>

            <tr>
              <td class="text-center">Gucci</td>
              <td class="text-center">referent@societe1.com</td>
              <td class="text-center">Invitation Envoyée</td>
              <td class="text-center">Supprimer</td>
              <td class="text-center">Actif</td>
            </tr>

            <tr>
              <td class="text-center">Le césar</td>
              <td class="text-center">referent@societe1.com</td>
              <td class="text-center">Invitation Envoyée</td>
              <td class="text-center">Supprimer</td>
              <td class="text-center">Actif</td>
            </tr>

            <tr>
              <td class="text-center">Bloom Art Work</td>
              <td class="text-center">referent@societe1.com</td>
              <td class="text-center">Invitation Envoyée</td>
              <td class="text-center">Supprimer</td>
              <td class="text-center">Actif</td>
            </tr>
          </tbody>

      </table>      

      
      
 

    <?php
        include ('footer.php')
        ?>
    
 
      


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>