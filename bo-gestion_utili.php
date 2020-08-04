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
 
       <h1>Gestion des utilisateurs</h1>

      <table class="table text-center mx-auto m-5">
       <thead>
         <tr style="background-color: #ce352c !important; color: white ;">
           <th scope="col" class="text-center">Nom</th>
           <th scope="col" class="text-center">Prénom</th>
           <th scope="col" class="text-center">email</th>
           <th scope="col" class="text-center">Rôle</th>
           <th scope="col" class="text-center">Satut</th>
           <th scope="col" class="text-center">Date / Heure</th>
           <th style="background-color:white;" scope="col" class="text-center"></th>
           <th style="background-color:white;" scope="col" class="text-center"></th>
           
     <?php
        include ('bo-footer.php')
        ?> 


         </tr>
      </thead>

         <tbody>
               <tr class="item">
                <td class="text-center">NJIFENJU</td>
                <td class="text-center">Kevin</td>
                <td class="text-center">1</td>
                <td class="text-center">Consultant</td>
                <td class="text-center">Activé</td>
                <td class="text-center">15-05-2020 <br> 10h03</td>
                <td style="background-color:white;" class="text-center"><a href="bo-modif_utili.php"><img src="https://img.icons8.com/small/16/000000/edit.png"/></a></td>
                <td style="background-color:white;" class="text-center"><img onclick="confirm" class="delete" src="https://img.icons8.com/small/16/000000/filled-trash.png"/></a>
                </tr>

                <tr class="item">
                <td class="text-center">APPADOO</td>
                <td class="text-center">Yanny</td>
                <td class="text-center">1</td>
                <td class="text-center">Consultant</td>
                <td class="text-center">Activé</td>
                <td class="text-center">15-05-2020 <br> 10h03</td>
                <td style="background-color:white; width:3px;" class="text-center"><a href="bo-modif_utili.php"><img src="https://img.icons8.com/small/16/000000/edit.png"/></a></td>
                <td style="background-color:white;width:3px; " class="text-center"><img onclick="confirm" class="delete" src="https://img.icons8.com/small/16/000000/filled-trash.png"/></a>
              </tr>

              <tr class="item">
                <td class="text-center">CLEMENT</td>
                <td class="text-center">Sylvain</td>
                <td class="text-center">1</td>
                <td class="text-center">Consultant</td>
                <td class="text-center">Activé</td>
                <td class="text-center">15-05-2020 <br> 10h03</td>
                <td style="background-color:white;" class="text-center"><a href="bo-modif_utili.php"><img src="https://img.icons8.com/small/16/000000/edit.png"/></a></td>
                <td style="background-color:white;" class="text-center"><img onclick="confirm" class="delete" src="https://img.icons8.com/small/16/000000/filled-trash.png"/></a>
               </tr>
            </tbody>

        </table>

        

      
          <?php
        include ('footer.php')
        ?>
      
        
  
        

        <script src="maquette.js"></script>

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

  (function($){
      
      $.confirm = function(params){
          
          if($('#confirmOverlay').length){
              // A confirm is already shown on the page:
              return false;
          }
          
          var buttonHTML = '';
          $.each(params.buttons,function(name,obj){
              
              // Generating the markup for the buttons:
              
              buttonHTML += '<a href="#" class="button '+obj['class']+'">'+name+'<span></span></a>';
              
              if(!obj.action){
                  obj.action = function(){};
              }
          });
          
          var markup = [
              '<div id="confirmOverlay">',
              '<div id="confirmBox">',
              '<p>',params.message,'</p>',
              '<div id="confirmButtons">',
              buttonHTML,
              '</div></div></div>'
          ].join('');
          
          $(markup).hide().appendTo('body').fadeIn();
          
          var buttons = $('#confirmBox .button'),
              i = 0;

          $.each(params.buttons,function(name,obj){
              buttons.eq(i++).click(function(){
                  
                  // Calling the action attribute when a
                  // click occurs, and hiding the confirm.
                  
                  obj.action();
                  $.confirm.hide();
                  return false;
              });
          });
      }

      $.confirm.hide = function(){
          $('#confirmOverlay').fadeOut(function(){
              $(this).remove();
          });
      }
      
  })(jQuery);














  $(document).ready(function(){
      
      $('.item .delete').click(function(){
          
          var elem = $(this).closest('.item');
          
          $.confirm({
            
              'message'   : 'Voulez-vous vraiment supprimer cette utilisateur ?". <br />! Continue?',
              'buttons'   : {
                  'No'    : {
                      'class' : 'gray',
                      'action': function(){}  // Nothing to do in this case. You can as well omit the action property.
                  },
                  'Yes'   : {
                      'class' : 'blue',
                      'action': function(){
                          elem.slideUp();
                      }
                  }
                  
              }
          });
          
      });
      
  });
    </script>
    </body>
  </html>