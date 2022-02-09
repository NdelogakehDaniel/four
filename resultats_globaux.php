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
<div style="background-color:white;" id="print9">



<h1> Les Résultats Globaux</h1>

 <script>

    var config = {
      type: 'bar',
      data: {
        datasets: [{
          data: [24, 56, 16, 4],
          backgroundColor: 'orange',
          label: 'Niveaux de véracités des 100 critères d_Exigences'
        }],
        labels: ['Faux', 'Plutot Faux', 'Plutot Vrai', 'Vrai']
      },
      options: {
        responsive: true
      }
    };



    var config1 = {
      type: 'bar',
      data: {
        datasets: [{
          data: [0, 0, 3, 1],
          backgroundColor: 'yellow',
          label: 'Niveaux de véracités des 22 sous chapitres d_Exigences'
        }],
        labels: ['insuffisant', 'informel', 'Convaincant', 'Conforme']
      },
      options: {
        responsive: true
      }
    };



    var config2 = {
      type: 'radar',
      data: {
        datasets: [{
          data: [20.0, 34.0, 33.0, 30.0, 23.0, 40.0, 38.75],
          backgroundColor: 'cyan',
          label: 'taux de conformite des 07 chapitres d_Exigences'
        }],
        labels: ['Art7: Support', 'Art8: Fonctionnement', 'Art9 Évaluation des performances', 'Art 10: Amélioration', "Art 4: Contexte de l'organisme", 'Art 5: Leadership', 'Art6: Planification']
      },
      options: {
        responsive: true
      }
    };


     var config3 = {
      type: 'radar',
      data: {
        datasets: [{
          data: [30.0, 32.0, 30.0, 60.0, 20.0, 32.0, 30.0, 15.0, 20.0, 30.0, 8.0, 24.0, 30.0, 50.0, 30.0, 70.0, 0.0, 30.0, 95.0, 0.0, 40.0, 45.5],
          backgroundColor: 'green',
          label: 'taux de conformite des 22 sous chapitres d_Exigences'
        }],
        labels: ['4.2: Compréhension des besoins et des attentes des parties intéressées', "4.3: Détermination du domaine d'application du système de management de la sécurité de l'information", "4.4: Système de Management de la Sécurité de l'Information", '5.2: Politique', "5.3: Rôles, responsabilités et autorités au sein de l'organisme", '6.2: Objectifs sécurité et planification pour les atteindre', '7.1: Ressources', '7.2:Compétences', '7.3: Sensibilisation', '7.4:Communication', '7.5: Informations documentées', '8.1: Planification et contrôle opérationnels', "8.2: Appréciation des risques de sécurité de l'information", "8.3: Traitement des risques de sécurité de l'information", '9.1: Surveillance, mesure, analyse et évaluation', '9.2: Audit interne', '9.3: Revue de direction', '10.1: Non-conformité et action corrective', '10.2:  Amélioration continue', "4.1: Compréhension de l'organisme et de son contexte", '5.1: Leadership et engagement', '6.1: Actions liées aux risques et opportunités']
      },
      options: {
        responsive: true
      }
    };


    window.onload = function() {
      var ctx = document.getElementById('critere').getContext('2d');
      window.myPie = new Chart(ctx, config);
      var ctx1 = document.getElementById('sousArticle').getContext('2d');
      new Chart(ctx1, config1);
      var ctx2 = document.getElementById('article').getContext('2d');
      new Chart(ctx2, config2);
      var ctx3 = document.getElementById('Taux_SousArticles').getContext('2d');
      new Chart(ctx3, config3);

    };

  </script>

<style>
    .row{
      background-color: whitesmoke;
    }
</style>



<div class="row">
    <div class="col-md-6 col-12">
        <div class="card" style="margin-top:30px;">
            <div class="card-body">
                <canvas id="critere" width="300" height="300"> </canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="card " style="margin-top:30px;">
            <div class="card-body">
                <canvas id="sousArticle" width="300" height="300"> </canvas>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-12">
        <div class="card" style="margin-top:30px;">
            <div class="card-body">
                <canvas id="article" width="300" height="300"> </canvas>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-12">
        <div class="card" style="margin-top:30px;">
            <div class="card-body">
                <canvas id="Taux_SousArticles" width="200" height="200"> </canvas>
            </div>
        </div>
    </div>
</div>

<h1> DECISION FINALE: STATUT DE L'ENTREPRISE PAR RAPPORT AUX EXIGENCE DE L_ISO 27001:2013</h1>
<h4>Après exploitation des résultats des exigences, <br>vous avez magaziné 200 points sur 400 points.  <br> le statut de votre entreprise par rapport aux exigences est le suivant: <b>LE NIVEAU D_APPLICABILITE DE L_ISO 27001:2013 AU SEIN DE VOTRE ENTREPRISE EST INFORMEL: Les actions sont réalisées quelques fois et de manière très informelle. il est donc necessaire de pérenniser la bonne excécution des activités au sein de votre entreprise</b>   </h4>

</div>

    <div id="print-btn"></div>
<button onclick="savePDF()" type="submit" name="print_btn" class="btn btn-outline-secondary">TELECHARGER LES RESULTATS</button>

<script  language="JavaScript">

function savePDF() {
var element = document.getElementById ("print9")
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
