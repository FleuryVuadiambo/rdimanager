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
      include ('menu BO.php');
      ?>

      <?php 
	include ("menu-horizontal-Back.php"); 
	?>
      <br>

      <h2 class="societegerer1" style="color: #ce352c;">Liste des sociétés:</h2>

      <table class="table text-center mx-auto m-5">
        <thead>
          <tr class="table table-secondary">
            <th scope="col" class="text-center">Societé</th>
            <th scope="col" class="text-center">Nb de licences</th>
            <th scope="col" class="text-center">Nb Licences utilisées</th>
            <th scope="col" class="text-center">Statut</th>
            <th scope="col" class="text-center">Date / Heure</th>
            <th scope="col" class="text-center">Gestionnaire</th>
            <th scope="col" class="text-center">Supprimer </th>
            <th scope="col" class="text-center">Modifier</th>
          </tr>
        </thead>

        <tbody style="text-align: center;">
            <tr class="item">
              <td class="text-center">Société 1</td>
              <td class="text-center">5</td>
              <td class="text-center">1</td>
              <td class="text-center">Créé</td>
              <td class="text-center">02-02-2020 <br> 15h03</td>
              <td class="text-center">Kevin</td>
              <td class="text-center"><img onclick="confirm" class="delete" src="https://img.icons8.com/small/16/000000/filled-trash.png"/></a>
              <td class="text-center"><img src="https://img.icons8.com/small/16/000000/edit.png"/></td>
            </tr>
          </tbody>

      </table>

     <a href="maquette4.html"><button type="button" class="btn btn-success">Ajouter</button></a>
      


     
        <footer>
          <a href="M8.html"><button><</button></a>
          <p class="copyright">Copyright Eurêka C.I</p>
          <img class="logofooter" src="img/logosign.png" alt="">
          <a href="M10.html"><button>></button></a>
      </footer>
    
      
 
      

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
            '<h1>',params.title,'</h1>',
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
            'title'     : 'Delete Confirmation',
            'message'   : 'You are about to delete this item. <br />It cannot be restored at a later time! Continue?',
            'buttons'   : {
                'Yes'   : {
                    'class' : 'blue',
                    'action': function(){
                        elem.slideUp();
                    }
                },
                'No'    : {
                    'class' : 'gray',
                    'action': function(){}  // Nothing to do in this case. You can as well omit the action property.
                }
            }
        });
        
    });
    
});
  </script>
  </body>
</html>