<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <title>OUTILS AUTO_DIAGNOSTIC</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/vuetify.min.css">

</head>
<body>
<h1>  Autodiagnostic selon la norme ISO 27001: 2013</h1>
<hr>


<!--navbar-->

<?php
include('navbar.php');
?>

<!--navbar-->
<script src="js/vue.js"></script>
<script src="js/vuetify.js"></script>
<script>
    new Vue({
      el: '#nav-bar',
      vuetify: new Vuetify(),
    })
</script>


<script src="cdn.jsdelivr.net/npm/chart.js%402.9.3/dist/Chart.min.js"></script>
<script type="text/JavaScript" src="js/jspdf.min.js"></script>
<script type="text/JavaScript" src="js/jquery.min.js"></script>
<script type="text/JavaScript" src="js/html2pdf.bundle.min.js"></script>
<b>
<div style="background-color:gray;" id="print10">
<div style="background-color:gray" >
</div>
<script src="cdn.jsdelivr.net/npm/chart.js%402.9.3/dist/Chart.min.js"></script>

<h1> Les Résultats par Article</h1>

 <script>

    var config4 = {
     type: 'radar',
      data: {
        datasets: [{
          data: [30.0, 15.0, 20.0, 30.0, 8.0],
          backgroundColor: 'green',
          label: 'chapitre 4 Contexte de l_organisme'
        }],
        labels: ['7.1: Ressources', '7.2:Compétences', '7.3: Sensibilisation', '7.4:Communication', '7.5: Informations documentées']
      },
      options: {
        responsive: true
      }
    };


    var config5 = {
      type: 'radar',
      data: {
        datasets: [{
          data: [24.0, 30.0, 50.0],
          backgroundColor: 'red',
          label: 'chapitre 5 leadership'
        }],
        labels: ['8.1: Planification et contrôle opérationnels', "8.2: Appréciation des risques de sécurité de l'information", "8.3: Traitement des risques de sécurité de l'information"]
      },
      options: {
        responsive: true
      }
    };


    var config6 = {
     type: 'radar',
      data: {
        datasets: [{
          data: [30.0, 70.0, 0.0],
          backgroundColor: 'orange',
          label: 'chapitre 6 planification'
        }],
        labels: ['9.1: Surveillance, mesure, analyse et évaluation', '9.2: Audit interne', '9.3: Revue de direction']
      },
      options: {
        responsive: true
      }
    };

    var config7 = {
     type: 'radar',
      data: {
        datasets: [{
          data: [30.0, 95.0],
          backgroundColor: 'darkred',
          label: 'chapitre 7 support'
        }],
        labels: ['10.1: Non-conformité et action corrective', '10.2:  Amélioration continue']
      },
      options: {
        responsive: true
      }
    };

    var config8 = {
     type: 'radar',
      data: {
        datasets: [{
          data: [30.0, 32.0, 30.0, 0.0],
          backgroundColor: 'yellow',
          label: 'chapitre 8 fonctionnement'
        }],
        labels: ['4.2: Compréhension des besoins et des attentes des parties intéressées', "4.3: Détermination du domaine d'application du système de management de la sécurité de l'information", "4.4: Système de Management de la Sécurité de l'Information", "4.1: Compréhension de l'organisme et de son contexte"]
      },
      options: {
        responsive: true
      }
    };

    var config9 = {
     type: 'radar',
      data: {
        datasets: [{
          data: [60.0, 20.0, 40.0],
          backgroundColor: 'seagreen',
          label: 'chapitre 9 evaluation des performances'
        }],
        labels: ['5.2: Politique', "5.3: Rôles, responsabilités et autorités au sein de l'organisme", '5.1: Leadership et engagement']
      },
      options: {
        responsive: true
      }
    };

    var config10 = {
     type: 'radar',
      data: {
        datasets: [{
          data: [32.0, 45.5],
          backgroundColor: 'pink',
          label: 'chapitre 10 amelioration'
        }],
        labels: ['6.2: Objectifs sécurité et planification pour les atteindre', '6.1: Actions liées aux risques et opportunités']
      },
      options: {
        responsive: true
      }
    };



    window.onload = function() {
      var ctx4 = document.getElementById('art4').getContext('2d');
      new Chart(ctx4, config4);
      var ctx5 = document.getElementById('art5').getContext('2d');
      new Chart(ctx5, config5);
      var ctx6 = document.getElementById('art6').getContext('2d');
      new Chart(ctx6, config6);
      var ctx7 = document.getElementById('art7').getContext('2d');
      new Chart(ctx7, config7);
      var ctx8 = document.getElementById('art8').getContext('2d');
      new Chart(ctx8, config8);
      var ctx9 = document.getElementById('art9').getContext('2d');
      new Chart(ctx9, config9);
      var ctx10 = document.getElementById('art10').getContext('2d');
      new Chart(ctx10, config10);







    };

 </script>


<div class="row">
    <div class="col-md-6 col-12">
        <div class="card" style="margin-top:30px;">
            <div class="card-body">
                <canvas id="art4" width="300" height="300"> </canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="card " style="margin-top:30px;">
            <div class="card-body">
                <canvas id="art5" width="300" height="300"> </canvas>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-12">
        <div class="card" style="margin-top:30px;">
            <div class="card-body">
                <canvas id="art6" width="300" height="300"> </canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="card " style="margin-top:30px;">
            <div class="card-body">
                <canvas id="art7" width="300" height="300"> </canvas>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6 col-12">
        <div class="card" style="margin-top:30px;">
            <div class="card-body">
                <canvas id="art8" width="300" height="300"> </canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="card " style="margin-top:30px;">
            <div class="card-body">
                <canvas id="art9" width="300" height="300"> </canvas>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6 col-12">
        <div class="card " style="margin-top:30px;">
            <div class="card-body">
                <canvas id="art10" width="300" height="300"> </canvas>
            </div>
        </div>
    </div>
</div>

</div>
</div>
    <div id="print-btn"></div>
<button onclick="savePDF()" type="submit" name="print_btn" class="btn btn-outline-primary">TELECHARGER LES RESULTATS</button>

<script  language="JavaScript">

function savePDF() {
var element = document.getElementById ("print10")
html2pdf(element);

};
</script>
</b>

<hr>
<footer>
<?php
    include('footer.php');
?>
</footer>

<script src="cdn.jsdelivr.net/npm/bootstrap%404.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>
</html>
