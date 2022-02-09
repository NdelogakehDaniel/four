<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: login.php');
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
<link rel="stylesheet" type="text/css" href="css/commonstyle2.css">

</head>
<body>
<h1>  Autodiagnostic selon la norme ISO 27001: 2013</h1>
<hr>


<?php
include('navbar.php');
?>

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
<b>
<br>
<!--etiquette de conseils-->
<div class="red" id="print5">
<div class="red" >
	<div class="col-md">
			<hr>
			<h1>
				<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:#ff2407" > <b>Quelques CONSEILS pour atteindre le respect des exigences...</b> </a>
			</h1>
	</div>
</div>
<!--etiquette de conseils-->

<table border=4 cellspacing=4 cellpadding=4 width=80%>
	 <tr>
       <td><b>Articles</b></td>
       <td>QUOI</td>
		<td>QUI</td>
   </tr>
   <tr>
       <td colspan="3"; style="background-color:gray" > Art. 4    Contexte de l'organisme </td>
   </tr>
   <tr>
       <td> <ul>
           <li>4.1: Compréhension de l'organisme et de son contexte </li>
           <li> 4.2: Compréhension des besoins et des attentes des parties intéressées </li>
           <li> 4.3: Détermination du domaine d'application du SMSI </li>
           <li> 4.4: Système de management de la sécurité de l'information </li>
            </ul>
       </td>
       <td> L’organisme doit déterminer les enjeux externes et internes liés au contexte socio-économique dans lequel il se situe. De plus, les parties intéressées doivent être identifiées ainsi que leurs attentes et exigences. Ces dernières seront listées et revus périodiquement. Les champs d'application du système de management de la qualité (SMSI) sont fixés, ainsi que l'ensemble des processus nécessaires à la mise en oeuvre de ce système.</td>
       <td> Responsable DSI et Direction Générale </td>
   </tr>
   <tr>
       <td colspan="3"; style="background-color:gray">Art. 5    Leadership</td>
   </tr>
   <tr>
       <td>  <ul>
            <li>5.1: Leadership et engagement </li>
           <li> 5.2: Politique </li>
           <li> 5.3: Rôles, responsabilités et autorités au sein de l'organisme </li>
            </ul>
       </td>
       <td> Dans cet article, la responsabilité de la direction est de communiquer et mettre à disposition sa politique qualité qu'elle appliquera et mettra à jour par la suite. L'engagement de la direction consiste aussi à attribuer les responsabilités et les autorités au sein de l'organisme afin d'appliquer sa politique de sécurité du système d'information.</td>
       <td> Responsable DSI et Direction Générale </td>
   </tr>
   <tr>
       <td colspan="3"; style="background-color:Aqua"> Art. 6    Planification  </td>
   </tr>
   <tr>
       <td>
           <ul>
            <li>6.1: Actions liées aux risques et opportunités </li>
           <li> 6.2: Objectifs sécurité et planification pour les atteindre </li>
            </ul>
       </td>
       <td> Ce paragraphe stipule l’identification des risques liés aux enjeux de l’organisme et de prendre les mesures nécessaires pour y remédier en déterminant et comparant les mesures mises en œuvre avec l'annexe A
Des objectifs pertinents et cohérents avec la politique de sécurité de l'information de l'organisme sont fixés et doivent être documentés, communiqués à l’ensemble des acteurs et mesurables afin de pouvoir évaluer la performance dans l’atteinte de ces objectifs.</td>
       <td>Responsable DSI et Direction Générale </td>
   </tr>
   <tr>
       <td>
           <ul>
            <li>7.1: Ressources </li>
           <li> 7.2: Compétences </li>
            <li>7.3: Sensibilisation </li>
           <li> 7.4: documentation </li>
           <li> 7.5: informations documentées </li>
            </ul>
       </td>
       <td> Les ressources humaines et matérielles nécessaires sont mises à disposition pour la réalisation des processus du SMSI. Les compétences des personnes qui ont un impact direct sur la sécurité du système d'information sont contrôlées. L'organisme sensibilise sur la sécurité de l'informations auprès des parties prenantes.
D'autre part, sur le volet informationnel, l'organisme doit planifier des réunions périodiques et des entretiens avec l'ensemble des pilotes de processus, ceci pour vérifier l'existence, la conformité et l'application sur le terrain des dispositions demandées. Les informations documentées doivent ainsi être créées, mises à jour, diffusées et utilisées par l'ensemble des parties prenantes.</td>
       <td> Responsable DSI et pilotes de processus (RH, Système informatique, Gestion administrative, gestion financière, Maintenance et Infrastructures)</td>
   </tr>
   <tr>
       <td colspan="3"; style="background-color:Aqua"> Art. 8    Fonctionnement </td>
   </tr>
   <tr>
       <td>
           <ul>
            <li>8.1: Planification et contrôle opérationnels </li>
           <li> 8.2: Appréciation des risques de sécurité de l'information </li>
           <li> 8.3: Traitement des risques de sécurité de l'information </li>
            </ul>
       </td>
       <td> L'organisme doit planifier, mettre en œuvre et maîtriser les processus, y compris externalisés, nécessaires à la réalisation des activités opérationnelles, après avoir recensé les objectifs en terme de sécurité de l'information et recueilli les informations documentées explicitant ces besoins.  Il est nécessaire de vérifier de façon continue, principalement après la mise à jour des processus, les informations relatives aux  actions menées qui doivent être documentées et conservées. </td>
       <td>  Direction Générale, Responsable DSI, pilotes des processus, Personnel</td>
   </tr>
   <tr>
       <td colspan="3"; style="background-color:Aqua"> Art. 9    Évaluation des performances </td>
   </tr>
   <tr>
       <td>
           <ul>
            <li>9.1: Surveillance, mesure, analyse et évaluation </li>
           <li> 9.2: Audit interne </li>
           <li> 9.3: Revue de direction </li>
            </ul>
       </td>
       <td>  L'organisme doit mettre en place des moyens de surveillance, de mesure et d'analyse des performances et de l'efficacité du SI. Les résultats sont conservés.  Il est important de programmer des audits internes de façon périodique et de communiquer les résultats à la direction, en fournissant les moyens nécessaires (humains et matériels) afin d'entreprendre sans délai la correction et les actions correctives appropriées s'il y a écart. Il est important de réaliser une revue de direction pour s'assurer de l'efficacité et l'adéquation du SMSI est en lien avec la stratégie de l'organisme. Cette revue fournit des décisions et actions sur les opportunités d’amélioration, le besoin de modifier le SMSI et le besoin en ressources. </td>
       <td>  Direction Générale, Responsable DSI, pilotes des processus, Personnel </td>
   </tr>
   <tr>
       <td colspan="3"; style="background-color:Aqua"> Art. 10    Amélioration </td>
   </tr>
   <tr>
       <td>
           <ul>
            <li>10.1: Non-conformité et action corrective </li>
           <li> 10.2:  Amélioration continue </li>
            </ul>
       </td>
       <td>  L'organisme s'engage à améliorer en continu la sécurité de son système d'information. Cela passe par la correction des anomalies et des non conformités , mais aussi par les actions préventives suite à l'étude et l'analyse des résultats d'évaluation de la performance du SMSI. L'organisme sera donc constamment dans une optique d'amélioration continue. </td>
       <td>   Direction Générale, Responsable DSI, pilotes des processus, Personnel </td>
   </tr>

</table>
</div>
    <div id="print-btn1"></div>
<button onclick="savePDF()" type="submit" name="print_btn" class="btn btn-outline-primary">TELECHARGER LES CONSEILS</button>

<script  language="JavaScript">

function savePDF() {
var element = document.getElementById ("print5")
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

<script src="../../cdn.jsdelivr.net/npm/bootstrap%404.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>

</html>
