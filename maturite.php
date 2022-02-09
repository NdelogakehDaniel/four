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
<link rel="stylesheet" type="text/css" href="css/commonstyle2.css">

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
<!--etiquette des maturite-->
<b>
<div  class="red"; style="background-color:wheat"  id="print3" >
	<div class="col-md">
		<hr>
		<h1 style="width: 100%; text-align: center;">
			<a class="btn btn-outline-info  btn-sm btn-block";  style="background-color:#ff2407; text-transform: uppercase;"> <b>QUESIONNAIRE DES EXIGENCES PAR ECHELLE DE MATURITE</b> </a>
		</h1>
		<table class="table table-hover" style="font-size: 15px" border="4" cellspacing=4>
			<thead>
				<th>Nom</th>
				<th>echelle de maturite </th>
				<th>justifications ou commentaires</th>
				<th></th>
			</thead>
			<tbody>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">Art4 : Contexte de l&#x27;organisation </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">2) Avez-vous déterminé les enjeux externes et internes propres à l&#x27;objectif de votre organisation et affectant votre capacité à atteindre les résultats escomptés de votre système de management de la sécurité de l’information </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1" selected>1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">3) Avez-vous déterminé les besoins, attentes et exigences réglementaires et statutaires des parties intéressées et celles de vos clients, vis à vis de votre SMSI ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2" selected>2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">4) Avez-vous pris en compte les enjeux internes et externes, ainsi que les parties intéressées ou toute autre structure en lien avec votre organisation qui risquent d&#x27;avoir un impact sur votre SMSI ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4" selected>4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">1) Avez-vous formalisé le périmètre fonctionnel, organisationnel, technique et physique de votre système de management de la sécurité de l’information (Information Security Management System - SMSI) </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4" selected>4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">Art 5: Leadership </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">5) La direction s&#x27;est-elle portée garante du maintien du SMSI, et du fait de s&#x27;assurer de son efficacité ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1" selected>1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">6) La direction a-t-elle communiqué sur l&#x27;importance du SMSI, et de la bonne application des procédures et des processus auprès des parties intéressées (internes et externes) ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1" selected>1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">7) La définition et la répartition des rôles et des responsabilités au sein du SMSI, ont-elles été communiquées et permettent-elles de veiller à la conformité du système ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5" selected>5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">Art6: Planification </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/8" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">8) Un processus d&#x27;évaluation des risques relatifs à la sécurité de l&#x27;information a-t-il été établi en incluant des critères d&#x27;acceptation des risques, de manière à être reproduit facilement et rapidement et permettant de produire des résultats cohérents et compatibles avec vos hypothèses ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2" selected>2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/9" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">9) L&#x27;organisation a-t-elle intégré et correctement planifié, des actions pour traiter ces risques et opportunités ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3" selected>3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/10" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">10) Le processus d&#x27;évaluation des risques relatifs à la sécurité de l&#x27;information suffit-il à identifier les risques associés à la perte de confidentialité, d&#x27;intégrité et de disponibilité des informations au sein du champ d&#x27;application du SMSI ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1" selected>1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/11" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">11) Les responsables associés à la gestion des risques identifiés ont-ils été désignés ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5" selected>5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/12" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">12) Les informations sur le processus d&#x27;évaluation des risques relatifs à la sécurité de l&#x27;information ont-elles été documentées et sont-elles disponibles ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2" selected>2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/13" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">13) Le processus de traitement des risques relatifs à la sécurité de l&#x27;information propose-t-il des solutions et des actions, réalistes et applicables (temps, ressources, moyens) ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3" selected>3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/14" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">14) Des contrôles ont-ils été déterminés pour mettre en œuvre l&#x27;option appropriée de traitement des risques choisis ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3" selected>3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/15" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">15) Les contrôles ont-ils été établies en rapport avec ISO/IEC 27001/2013 Annexe A pour vérifier qu&#x27;aucun contrôle nécessaire n&#x27;a été omis ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5" selected>5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/16" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">16) Avez-vous produit une Déclaration d&#x27;applicabilité (DDA/SoA) pour justifier les exclusions et inclusions à l&#x27;Annexe A, ainsi que le statut de mise en œuvre du contrôle </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4" selected>4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/17" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">17) Un plan de traitement des risques relatifs à la sécurité de l&#x27;information a-t-il été créé et approuvé par les propriétaires des risques ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2" selected>2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/18" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">18) Les risques résiduels relatifs à la sécurité de l&#x27;information ont-ils été autorisés par les propriétaires des risques et cela a-t-il été documenté ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3" selected>3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/19" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">19) Des objectifs du SMSI mesurables ont-ils été établis, documentés et communiqués à travers l&#x27;ensemble de l&#x27;organisation ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1" selected>1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">Art7: Support </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/20" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">20) L&#x27;organisation a-t-elle déterminé et fourni, les ressources requises pour l&#x27;établissement, la mise en œuvre, la tenue et l&#x27;amélioration continue du SMSI (en tenant compte des individus, de l&#x27;infrastructure et de l&#x27;environnement pour le fonctionnement des processus) ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1" selected>1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/21" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">21) L&#x27;organisation a-t-elle déterminé les connaissances nécessaires pour les personnes assumant ces rôles au sein du SMSI ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4" selected>4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/23" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">23) Les informations documentées requises par l&#x27;organisation dans le cadre du SMSI sont-elles contrôlées de sorte à être disponibles, protégées, distribuées, stockées, conservées et soumises au contrôle des changements (y compris les documents d&#x27;origine externe) ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4" selected>4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/22" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">22) Des formations relatives aux exigences de l&#x27;ISO 27001:2013 ont-elles été réalisées ou planifiées pour toutes les personnes concernées (responsables sur SMSI, équipe d&#x27;audit interne, la direction si nécessaire) ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3" selected>3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">Art8: Fonctionnement </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/24" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">24) Les évaluations des risques relatifs à la sécurité de l&#x27;information sont-elles conduites à des intervalles planifiés ou à la suite de modifications notables, et les informations documentées sont-elles conservées ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2" selected>2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/25" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">25) Avez-vous déterminé ce qui doit être contrôlé et mesuré, quand, par qui, les méthodes à utiliser et quand les résultats devront être évalués puis documentés ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3" selected>3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/26" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">26) Des audits internes sont-ils conduits régulièrement pour vérifier que le SMSI est efficace et conforme à ISO/IEC 27001:2013 ainsi qu&#x27;aux exigences et objectifs de l&#x27;organisation ? Les résultats sont-ils rapportés à la direction et conservés ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1" selected>1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/27" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">27) Lorsque des non-conformités sont identifiées, l&#x27;organisation a-t-elle établi des processus appropriés pour gérer ces non-conformités et mettre en place les actions correctives associées ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3" selected>3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/28" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">28) La direction entreprend-elle des revues régulières et périodiques du fonctionnement et suivi du SMSI et identifie-t-elle des modifications et améliorations à apporter qu&#x27;elle communique aux parties interessées ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5" selected>5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">Art9 Évaluation des performances </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/29" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">29) Les actions à mettre en œuvre pour contrôler, corriger et traiter les conséquences des non-conformités ont-elles été identifiées et organisées ainsi que les causes racine en vue d&#x27;éviter qu&#x27;elles ne se reproduisent ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2">2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5" selected>5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">Art 10: Amélioration </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Maturite/Maturite/30" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="pbk92xVBk7iuaoCo05CKED9NKNqlgAFJ9sExCmi6V4fTjRzUm2koRjR3EOnxUa92">
							<td class="w-50">30) Les informations documentées requises par l&#x27;organisation dans le cadre du SMSI sont-elles contrôlées de sorte à être disponibles, protégées, distribuées, stockées, conservées et soumises au contrôle des changements (y compris les documents d&#x27;origine externe) ? </td>
							<td>
								
								<select name="echelle_de_maturite" class="form-control">
									
										
											<option value="1">1</option>
										
									
										
											<option value="2" selected>2</option>
										
									
										
											<option value="3">3</option>
										
									
										
											<option value="4">4</option>
										
									
										
											<option value="5">5</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
			</tbody>
		</table>
	</div>
</div>

<!--etiquette des maturite-->

<div class="lightblue">
	<div class="col-md">

		<h2>
			<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:red " > <b>DATE DU DERNIER AUDIT DE MATURITE
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

	<div id="print-btn3"></div>
<button onclick="savePDF()" type="submit" name="print_btn" class="btn btn-outline-primary">TELECHARGER LES DONNEES DE L'AUDIT</button>
<script  language="JavaScript">

function savePDF() {
var element = document.getElementById ("print3")
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

<script src="../../../cdn.jsdelivr.net/npm/bootstrap%404.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>

</html>
