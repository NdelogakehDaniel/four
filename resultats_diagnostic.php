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
<style>
  body{
    background-color: whitesmoke;
  }
</style>
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
<div style="background-color:white" id="print8">


<script src="cdn.jsdelivr.net/npm/chart.js%402.9.3/dist/Chart.min.js"></script>

<h1>   LES RESULTATS DE L'OUTIL D'AUTODIAGNOSTIC 2</h1>

 <script>

    var configD = {
      type: 'bar',
      data: {
        datasets: [{
          data: [87, 64],
          backgroundColor: '#0cc364',
          label: 'nombre de question par  oui/non'
        }],
        labels: ['oui', 'non']
      },
      options: {
        responsive: true
      }
    };

     var configD1 = {
      type: 'radar',
      data: {
        datasets: [{
          data: [2, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 43, 44, 50, 51, 52, 46, 42, 47, 48, 49, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 145, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 146, 147, 148, 149, 150, 151, 152, 1, 3],
          backgroundColor: '#ff2407',
          label: 'réponse de chaque question'
        }],
        labels: ['oui', 'oui', 'non', 'non', 'non', 'oui', 'non', 'oui', 'oui', 'oui', 'non', 'oui', 'non', 'oui', 'non', 'non', 'oui', 'oui', 'non', 'oui', 'oui', 'non', 'non', 'oui', 'non', 'non', 'non', 'non', 'oui', 'oui', 'non', 'non', 'non', 'non', 'oui', 'oui', 'non', 'non', 'non', 'oui', 'oui', 'non', 'oui', 'oui', 'non', 'non', 'oui', 'non', 'non', 'oui', 'oui', 'non', 'oui', 'non', 'oui', 'oui', 'oui', 'non', 'non', 'oui', 'oui', 'non', 'oui', 'oui', 'oui', 'non', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'non', 'non', 'non', 'oui', 'non', 'non', 'non', 'non', 'non', 'non', 'oui', 'non', 'non', 'non', 'non', 'non', 'non', 'non', 'non', 'non', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'non', 'oui', 'oui', 'oui', 'oui', 'non', 'oui', 'non', 'non', 'oui', 'non', 'oui', 'oui', 'non', 'oui', 'non', 'non', 'non', 'non', 'oui', 'oui', 'non', 'non', 'non']
      },
      options: {
        responsive: true
      }
    };


    window.onload = function() {
      var ctxD = document.getElementById('ouinon').getContext('2d');
      window.myPie = new Chart(ctxD, configD);
      var ctxD1 = document.getElementById('questionnaires').getContext('2d');
      new Chart(ctxD1, configD1);

    };

  </script>


<div class="row">
    <div class="col-md-6 col-5">
        <div class="card" style="margin-top:3px;">
            <div class="card-body">
                <canvas id="ouinon" width="300" height="300"> </canvas>
            </div>
        </div>
    </div>

    <div class="col-md-9 col-12">
        <div class="card" style="margin-top:3px;">
            <div class="card-body">
                <canvas id="questionnaires" width="200" height="200"> </canvas>
            </div>
        </div>
    </div>
</div>




<h1> DECISION FINALE: STATUT DE L'ENTREPRISE</h1>
<h4>Après exploitation des résultats du questionnaire, <br> Le nombre de questions répondu par oui est: <b>87</b> sur 152 <br> Le statut de votre entreprise est le suivant: <br>  <b>LE NIVEAU D_APPLICABILITE DE L_ISO 27001:2013 AU SEIN DE VOTRE ENTREPRISE EST CONVAINCANT: les actions sont formalisées et réalisées. il est donc nécessaire de tracer et d_améliorer les activités au sein de votre entreprise </b> <br></h4>



</div>

    <div id="print-btn"></div>
<button onclick="savePDF()" type="submit" name="print_btn" class="btn btn-outline-primary">TELECHARGER LES RESULTATS</button>

<script  language="JavaScript">

function savePDF() {
var element = document.getElementById ("print8")
html2pdf(element);

};
</script>

</b>

<hr>
<footer>
    <div class="row">
    <div class="col-md">
        <div class="card card-body">
            <h5>NOM DE L'ETABLISSEMENT: <br /> VIETTEL Cameroun SA </h5>

        </div>
    </div>

    <div class="col-md">
        <div class="card card-body" >
            <h5>RESPONSABLE DU SMSI: BAMA-SI Frank</h5>
            <hr>
            <h5>CONTACT DU RESPONSABLE DU SMSI: email : franck.mfoum@nexttel.com.cm  <br />  Tél : 661000101</h5>
            <hr>

        </div>
    </div>

    <div class="col-md">
        <div class="card card-body">
            <h5>L'équipe d'autodiagnostic: EHET BEAL Sylvin, Jesse AFANA(jimafana@gmail.com)</h5>
            <h1 style="text-align: center;padding: 10px"></h1>
        </div>
    </div>
</div>
</footer>

<script src="cdn.jsdelivr.net/npm/bootstrap%404.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</body>

</html>
