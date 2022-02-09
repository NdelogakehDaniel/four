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



<script type="text/JavaScript" src="js/jspdf.min.js"></script>
<script type="text/JavaScript" src="js/jquery.min.js"></script>
<script type="text/JavaScript" src="js/jspdf.min.js"></script>
<script type="text/JavaScript" src="js/html2pdf.bundle.min.js"></script>
<!--etiquette des mesures-->
<b>
<div  class="red"; style="background-color:wheat" id="print4" >
	<div class="col-md">
		<hr>
		<h1>
			<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:#ff2407; text-transform: uppercase;" > <b>Liste des mesures</b> </a>
		</h1>
		<table class="table table-hover" style="font-size: 15px" border="4" cellspacing=4>
			<thead>
				<th>Nom</th>
				<th>Evaluation </th>
				<th>Taux</th>
				<th>justifications ou commentaires</th>
				<th></th>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
</div>


<!--etiquette des exigences-->

<div class="lightblue">
	<div class="col-md">

		<h2>
			<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:seagreen; " > <b>DATE DU DERNIER AUDIT SUR LES MESURES DE L'ANNXE A
				<SCRIPT language="JavaScript">

	var
	derniereModif=document.lastModified;

	var dateModif = new
	Date(derniereModif);
	var jour = dateModif.getDate();
	var mois=dateModif.getMonth();
	var annee=dateModif.getFullYear();
	var
	heures=dateModif.getHours();
	var
	minutes=dateModif.getMinutes();

	document.write(" : ");
	document.write(jour+"/"+mois+"/"+ annee +" à "+ heures +":"+minutes);

</SCRIPT>
	</b></a>
		</h2>

		</div>
</div>

</b>


<div id="print-btn4"></div>
<button onclick="savePDF()" type="submit" name="print_btn" class="btn btn-outline-primary">TELECHARGER LES DONNEES DE L'AUDIT</button>

<script  language="JavaScript">

function savePDF() {
var element = document.getElementById ("print4")
html2pdf(element);

};
</script>



<hr>
<footer>
<?php
	include('footer.php');
?>
</footer>

<script src="cdn.jsdelivr.net/npm/bootstrap%404.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>

</html>
