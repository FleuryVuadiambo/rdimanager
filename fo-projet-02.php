<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">

    <style>
        body {background-color: beige; color: brown; }
        .img_logo {position: absolute; left: 4%; top: 8%; }
        .img_logo img {height: 50px; } 
        .contenu {margin-top: 40px; display: flex; }
        label#date_fin.col-sm-4.col-form-label {position: relative; left: 16%; }
        /* .register {position:relative; left: 13%; }
        .gerer_participants {background-color: rgb(134, 174, 226);}
        th {color: brown; }
        td {background-color: whitesmoke; text-align: center; } */

        .facts {display: flex; justify-content: center;  }
        .new_user {position: absolute; bottom: 32%; }
        .facts .new_user a {background-color: brown; }
        .overlay {position: fixed; top: 0; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.7); transition: opacity 500ms; visibility: hidden; opacity: 0; }
        .overlay:target {visibility: visible; opacity: 1; }
        #popup1 {position: absolute; z-index: 5; height: 57em; top: 19%; left: 10%; width: 80%; }
        .popup {margin: 70px auto; padding: 20px; background: #fff; border-radius: 5px; width: 50%; position: relative; transition: all 5s ease-in-out; }
        .close {position: absolute; top: 5%; right: 3%; font-size: xx-large; }
        .valid {text-align: center; margin-top: 20px; }

        
        .timeline {text-align: center; position: relative; min-height: 811px; overflow-y: hidden; }
        .timeline-item:before {content: ''; position: absolute; background-color: #FFF; width: 3px; height: 100%; left: 288px; }
        .timeline-item {margin: 0 74px; }
        .timeline-item-details {display: inline-block; margin-bottom: 64px; }
        .timeline-item:first-child .timeline-item-details {margin-top: 64px; }
        .timeline-item-details-date, .timeline-item-details-marker, .timeline-item-details-description {float: left; }
        .timeline-item-details-date {color: brown; font-size: 1.3em; }
        .timeline-item-details-marker {position: relative; border-radius: 50%; background-color: #3F51B5; width: 32px; height: 32px; border: 3px solid white; margin-left: 27px; transition: transform .3s, background-color .3s; }
        .timeline-item-details:hover .timeline-item-details-marker {transform: scale(1.4); background-color: white; }
        .timeline-item-details-description:before {content: ''; position: absolute; background-color: red; width: 74px; height: 3px; margin-left: -90px; margin-top: 18px; }
        .timeline-item-details-description {text-align: justify; padding: 16px; color: #333; background-color: #FFF; width: 900px; border-radius: 4px; margin-left: 74px; margin-top: -20px; word-wrap: break-word;
            opacity: .9; transition: opacity .3s; overflow: scroll; }
        .timeline-item-details:hover .timeline-item-details-description {opacity: 1; }
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <title>Maquette 13 (Fleury)</title>
</head>
<body>
   <?php 
	include ("menu BO.php"); 
	?>
	<?php 
	include ("menu-horizontal.php"); 
	?>


    <!-- <div class="img_logo">
        <img src="img/image001.png" alt="">
    </div> -->
    
    <div class="contenu">

        <div class="container form">
        
            <div class="form-group row">
                <div class="text-center mx-auto projet">
                    <h1>Votre projet</h1>
                </div>
            </div>

            <div class="form-group row">
                <label for="projet" class="col-sm-2 col-form-label">Projet</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="projet">
                </div>
            </div>
            <div class="form-group row">
                <label for="titre" class="col-sm-2 col-form-label">Titre</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="titre">
                </div>
            </div>
            <div class="form-group row">
                <label for="statut" class="col-sm-2 col-form-label">Statut</label>
                <div class="col-sm-8">
                    <select id="statut" class="form-control">
                        <option selected>Création </option>
                        <option>...</option>
                    </select>                
                </div>
            </div>
            <div class="form-group row">
                <label for="liste_projets" class="col-sm-2 col-form-label">Résumé</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="liste_projets" rows="3"></textarea>
                </div>    
            </div>
            <div class="form-group row">
                <label for="chef_projet" class="col-sm-2 col-form-label">Chef du projet</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="chef_projet">
                </div>
            </div>
            <div class="form-group row">
                <label for="date_debut" class="col-sm-2 col-form-label">Date de début</label>
                <div class="col-sm-2">
                  <input type="date" class="form-control" id="date_debut">
                </div>
                <label for="date_fin" class="col-sm-4 col-form-label" id="date_fin">Date de fin</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="date_fin">
                </div>
            </div>

        </div>

    </div>

        <!-- <div class="gestion" style="position: relative; left: -14%;">

            <h5 class="text-center m-4" style="font-size: 2em;">Gérer les participants</h5>    
            
            <table  class="table table-bordered col-md text-center mx-auto m-5">
                <thead>
                    <tr class="gerer_participants">
                        <th style="color:whitesmoke;">Participants</th>
                        <th style="color:whitesmoke;">Rôle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Administrateur</td>
                    </tr>
                </tbody>
            </table>

        </div> -->

        
        
    <div class="facts">
        <h2 class="text-center mx-auto m-4" style="font-size: 2em;">Faits marquants</h2>
        <div class="text-center new_user">
            <a class="button" href="#popup1"><input type="submit" value="Ajouter un fait marquant"></a>
        </div>
    </div>

    <div id="popup1" class="overlay">
        <div class="popup">
            <h2 class="text-center m-4">Projet : <span>Développement IP</span> </h2>
            <a class="close" href="#">&times;</a>
            <div class="col-lg mx-auto">
                <textarea class="form-control" id="liste_projets" rows="11">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis doloremque voluptate similique tempora eius alias, vitae reprehenderit est, molestiae illum vero consequatur illo quis blanditiis ab nemo consectetur delectus nisi! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat enim nesciunt, quod ratione impedit adipisci nulla eveniet corporis, ad porro iure, saepe soluta! Laboriosam possimus modi nostrum asperiores, nihil obcaecati.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem totam exercitationem ducimus architecto! Magnam doloribus ducimus velit ut provident assumenda! Omnis non suscipit architecto ad! Nemo tempora autem soluta rem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe id voluptate dolorum. Placeat quos natus quam non molestiae odio! Earum ipsa praesentium error repellendus tempora soluta molestias consectetur eum sint.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, culpa. Illo molestias excepturi natus, sunt laboriosam exercitationem dolorum? Labore, natus eligendi! Maiores vero labore et sed distinctio, quo aliquam laboriosam.</textarea>
            </div> 
            <div class="valid">
                <input type="button" class="btn btn-success" value="Valider">
            </div><br>           
        </div>
    </div> <br>

    <div class="timeline">
        <section class="timeline-item">
            <a href="#" class="timeline-item-details">
                <time datetime="2020-07-10" class="timeline-item-details-date">05 novembre 2016</time>
                <div class="timeline-item-details-marker"></div>
                <div class="timeline-item-details-description">
                    <h2>Ceci est un titre</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum dicta minus ea quas. Minima voluptas eligendi numquam! Error corrupti beatae sed eius sit nisi quam soluta iusto, quia vero. Vel!</p>
                </div>
            </a>
        </section>
        <section class="timeline-item">
            <a href="#" class="timeline-item-details">
                <time datetime="2020-07-10" class="timeline-item-details-date">05 septembre 2016</time>
                <div class="timeline-item-details-marker"></div>
                <div class="timeline-item-details-description">
                    <h2>Ceci est un titre</h2>
                    <p><span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus harum ipsam incidunt architecto obcaecati molestiae fugit ipsum nemo laboriosam. Maxime explicabo rerum, ipsa quibusdam eaque quasi ratione laboriosam? Suscipit, vel.
                    Reprehenderit adipisci fugiat veniam laudantium? Non nostrum tenetur molestiae, enim ducimus id blanditiis culpa odio corporis cumque delectus, quae dolores unde cupiditate labore repudiandae explicabo repellat autem molestias dolor quis?</span>
                    Exercitationem voluptatem cupiditate vero totam odit doloribus aliquam adipisci perspiciatis, minima iure id enim, voluptatibus nam voluptates asperiores tempora a soluta cumque repellat sequi consequatur similique necessitatibus ab. Libero, aliquam.
                    Natus consectetur magni consequatur dignissimos voluptatum soluta totam, distinctio aspernatur minus laudantium. Delectus quae, voluptate soluta sequi similique nesciunt aspernatur necessitatibus corporis quibusdam odit accusantium inventore tempore qui, dolorem eos.
                    Quam, expedita, labore amet eum soluta aliquid assumenda eos, quasi saepe fuga hic laudantium reprehenderit explicabo facere aspernatur temporibus tempore! Natus eveniet temporibus iure placeat, impedit tempore reiciendis maxime eum.
                    Non nam accusantium accusamus, harum et illo assumenda ut voluptatibus dolores repudiandae repellendus ab est! Nihil facilis suscipit laboriosam. Error reprehenderit, ad minima dignissimos doloribus asperiores libero quo illo iure?</p>
                </div>
            </a>
        </section>
    </div>


    <footer>
        <a href="index8.html"><button> < </button></a>
        <p class="copyright">Copyright Eurêka C.I</p>
        <img class="logofooter" src="img/logo.png" alt="">
        <a href="index10.html"><button> > </button></a>
    </footer>
        
</body>
</html>