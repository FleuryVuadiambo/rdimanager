<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">
    <link rel="stylesheet" href="styles-old.css">
    <title>Hello, world!</title>
  </head>
  <body>
   
    <?php
      include ('menu BO.php');
      ?>

      <?php 
	include ("menu-horizontal.php"); 
	?>
      
      <br>
    

      <h1>Gestions des Utilisateurs :</h1>

      <table class="table text-center mx-auto m-5">
       <thead>
         <tr class="table table-primary">
           <th scope="col" class="text-center">Nom</th>
           <th scope="col" class="text-center">Prénom</th>
           <th scope="col" class="text-center">email</th>
           <th scope="col" class="text-center">Rôle</th>
           <th scope="col" class="text-center">Satut</th>
           <th scope="col" class="text-center">Date / Heure</th>
           <th scope="col" class="text-center">Supprimer </th>
           <th scope="col" class="text-center">Modifier</th>


         </tr>
       </thead>

         <tbody>
               <tr class="table table-secondary">
                <td class="text-center">NJIFENJU</td>
                <td class="text-center">Kevin</td>
                <td class="text-center">Knjifendju@eurekaci.com</td>
                <td class="text-center">Consultant</td>
                <td class="text-center">Activé</td>
                <td class="text-center">20h30 <br> 01/07/2019</td>
                <td class="text-center"><img src="https://img.icons8.com/small/16/000000/filled-trash.png"/></td>
                 <td class="text-center"><img src="https://img.icons8.com/small/16/000000/edit.png"/></td>
               </tr>
           <tr class="table table-secondary">
            <td class="text-center">CLEMENT</td>
            <td class="text-center">Sylvain</td>
            <td class="text-center">sclement@eurekaci.com</td>
            <td class="text-center">Consultant</td>
            <td class="text-center">Activité</td>
            <td class="text-center">20h30 <br> 01/07/2020</td>
            <td class="text-center"><img src="https://img.icons8.com/small/16/000000/filled-trash.png"/></td>
             <td class="text-center"><img src="https://img.icons8.com/small/16/000000/edit.png"/></td>
           </tr>
         </tbody>

     </table>

     <button type="button" class="btn btn-success">Ajouter</button>

    <footer>
      <a href="M12.html"><button><</button></a>
      <p class="copyright">Copyright Eurêka C.I</p>
      <img class="logofooter" src="img/logosign.png" alt="">
      <a href="M1.html"><button>></button></a>
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>