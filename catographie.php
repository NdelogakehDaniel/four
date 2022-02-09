<?php
session_start();
if(!isset($_SESSION['id'])){
  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Catography</title>
	<link rel="stylesheet" type="text/css" href="css/catography.css">
</head>
<body>
  <div id="large"><div id="header"><div id="logo"> <img src="images/nexttellogo.png" width="75" height="50"><img src="images/Logo%20ENSP.png" width="50" height="50"></div><h1 id="rootTitle">
      CARTOGRAPHIE DES PROCESSUS ISO 27001: 2013</h1></div>
      <div id="content">
          <div id="intro">
              <div class="links ">
                  <a class="prcsMapLink " target="_self" href="carto_01.html">
                      <span>Accéder à "ISO27001 : version 2013"</span>
                  </a>
              </div>
              <div>
                  <div><div><div>
                      <p>La cartographie est un outil incontournable en ce qui concerne la méthode de travail par approche processus.
                          Il sert à fournir une compréhension efficace de l'ensemble des processus clés pour réussir la mise en place d'un SMSI efficace,
                          permettre d'obtenir une vue claire sur les activités de l'entreprise NEXTTEL ainsi que sur les ressources disponibles (support et
                          les facteurs influant sur la prise de décisions du management du SMSI.)
                      </p></div></div></div></div></div></div><div id="footer"><div class="meta "><span class="meta_ti ">Auteur : </span>Jesse AFANA</div><div class="meta "><span class="meta_ti ">Contributeurs :   <span>VIETTEL </div><div class="meta "><span class="meta_ti ">Date : </span>14/06/2021</div>
                  </div></div>
 
</body>
</html>