<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">
    
    <style>        
        a:hover {text-decoration: none;  }
        .form-control col-sm-3 {position: absolute;}
        .img_logo {position: absolute; left: 4%; top: 8%; }
        .img_logo img {height: 50px; }
        /* .title {display: flex; justify-content: space-around; } */
        i {color: black; }
        .table thead th {background-color: #ce352c; color: white; }
        tr, td {background-color: #e6e6e6; }
        .btn-success {color: white; background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%); border: none; }
        .chart {display: flex; justify-content: space-between; }

    /**********************************************RESPONSIVE DESIGN**************************************************/
    @media screen and (min-width: 1024px)
    {
        /* .chart {display: flex; justify-content: space-between; } */
    }
    @media screen and (min-width: 970px)
    {
        body {
            overflow-x: hidden;

        }
        .chart {
            display: flex;
            /* flex-direction: column;  */
            /* flex-wrap: wrap;  */
            justify-content: center;
            align-items: center;
        }
        .container {
            position: relative;
            left: 2.5%;
            max-width: 50%;
        }
    }
    @media screen and (max-width: 792px)
    {
        body {
            overflow-x: hidden;
            min-height: 300px; 
        }
        .select {
            position: absolute; 
            left: 10%;
            top: 30%;
        }
        .chart {
            flex-direction: column;
        }
    }
    @media screen and (min-width: 650px)
    {
        body {
            overflow-x: hidden;
        }
        .title {
            text-align: center; 
            position: relative; 
            right: 10%;
        }
        .subtitle {
            position: relative;
            right: 10%;
        }
        .select {
            position: absolute; 
            left: 75%;
            top: 37%;
        }
        #piechart_3D {
            width: 1000%;
        }
    }
    @media screen and (min-width: 540px) and (max-width: 650px)
    {
        body {
            overflow-x: hidden;
        }
        .title {
            text-align: center;
        }
        .select {
            position: absolute;
            bottom: 20%;
        }
        .personne {
            display: none;
        }
    }
    @media screen and (max-width: 540px)
    {
        #menu-demo2 {
            display: flex; 
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            
        }
        .personne {
            display: none;
        }
        .select {
            position: absolute;
            left: 20%;
        }
    }


    </style>

    <title>Tableau de bord modifié</title>
</head>
<body>
    <?php include ("fo-header.php"); ?>
	<?php include ("menu-horizontal.php"); ?>

    <section style="height: 1090px;">
        <div class="container">        
            <!-- <h1 class="text-center mt-4 mb-4" style="color: #ce352c;"> Projets de l'année  <| 2020 |> <a href="#" style="font-size: smaller;"></h1> -->
            <div class="title">
                <div class="subtitle">
                    <label for="bday-month"><h1 class="text-center mt-4" style="color: #ce352c;">Projets de l'année </h1></label>
                </div>
                <div class="select">
                    <select name="select" class="form-control" id="dropdownYear" style="width: 120px; position: absolute; left: 56%; top: 30%;" onchange="getProjectReportFunc()"></select>
                </div>                   
            </div>
        </div>

        <div class="chart">
            <div id="piechart_3d" class="text-center mx-auto" style="width: 3125%; height: 500px;"></div>
            <div id="myDiv" class="text-center mx-auto"   style="width: 3125%; height: 500px;">Projet des trois dernières années</div>
        </div>            
            <!--   <h4 class="text-center"><a><i class="fas fa-arrow-alt-circle-left"></i></a> <| 2020 |> <a href="#"><i class="fas fa-arrow-alt-circle-right"></i></a></h4>
-->
        <div class="container">
            <table class="table table-bordered mx-auto m-5"  style="max-width: 67.9%;">
                <thead>
                    <tr class="table table-secondary">
                        <th scope="col">TABLEAU DE BORD</th>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col" class="text-center">Equipe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Nombre de projets de l'année en cours</th>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre de projets de type CIR-CII</th>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                    </tr>
                    <tr>
                        <th scope="row">Temps total passé en  heures</th>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="button text-center mb-5">
            <a href="fo-temps-01.php"><input type="button" class="btn btn-success" value="Mettre à jour votre feuille de temps"></a>
        </div>
    </section>
      
        <?php include ("footer.php"); ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        // var monthControl = document.querySelector('input[type="year"]');
        // monthControl.value = '2017';
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Statuts', 'Speakers (in pourcents)'],
            ['En cours',85], ['Terminé', 15], ['Suspendu', 4],
          ]);
          var options = {
            title: 'Projets réalisés depuis 2017',
            is3D: true,
          //   legend: 'none',
            pieSliceText: 'label',
            slices: {  4: {offset: 0.2},
                      12: {offset: 0.3},
                      14: {offset: 0.4},
                      15: {offset: 0.5},
            },
          };
      
          var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
          chart.draw(data, options);
        }

        var x = ["2015","2015","2016","2016", "2017"]
        var y = ["1","1","3","10","23"]
            
        var data = [
          {
            histfunc: "RDI",
            y: y,
            x: x,
            type: "histogram",
            name: "RDI"
          },
          {
            histfunc: "Non RDI",
            y: y,
            x: x,
            type: "histogram",
            name: "Non RDI"
          }
        ]
   
        Plotly.newPlot('myDiv', data)  
        
        $('#dropdownYear').each(function() {

            var year = (new Date()).getFullYear();
            var current = year;
            // year += 4;
            for (var i = 0; i < 5; i++) {
              if ((year+i) == current)
                $(this).append('<option selected value="' + (year - i) + '">' + (year - i) + '</option>');
              else
                $(this).append('<option value="' + (year - i) + '">' + (year - i) + '</option>');
            }

        })
    </script>
</body>
</html>