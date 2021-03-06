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
							<td class="w-50">2) Avez-vous d??termin?? les enjeux externes et internes propres ?? l&#x27;objectif de votre organisation et affectant votre capacit?? ?? atteindre les r??sultats escompt??s de votre syst??me de management de la s??curit?? de l???information </td>
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
							<td class="w-50">3) Avez-vous d??termin?? les besoins, attentes et exigences r??glementaires et statutaires des parties int??ress??es et celles de vos clients, vis ?? vis de votre SMSI ? </td>
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
							<td class="w-50">4) Avez-vous pris en compte les enjeux internes et externes, ainsi que les parties int??ress??es ou toute autre structure en lien avec votre organisation qui risquent d&#x27;avoir un impact sur votre SMSI ? </td>
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
							<td class="w-50">1) Avez-vous formalis?? le p??rim??tre fonctionnel, organisationnel, technique et physique de votre syst??me de management de la s??curit?? de l???information (Information Security Management System - SMSI) </td>
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
							<td class="w-50">5) La direction s&#x27;est-elle port??e garante du maintien du SMSI, et du fait de s&#x27;assurer de son efficacit?? ? </td>
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
							<td class="w-50">6) La direction a-t-elle communiqu?? sur l&#x27;importance du SMSI, et de la bonne application des proc??dures et des processus aupr??s des parties int??ress??es (internes et externes) ? </td>
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
							<td class="w-50">7) La d??finition et la r??partition des r??les et des responsabilit??s au sein du SMSI, ont-elles ??t?? communiqu??es et permettent-elles de veiller ?? la conformit?? du syst??me ? </td>
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
							<td class="w-50">8) Un processus d&#x27;??valuation des risques relatifs ?? la s??curit?? de l&#x27;information a-t-il ??t?? ??tabli en incluant des crit??res d&#x27;acceptation des risques, de mani??re ?? ??tre reproduit facilement et rapidement et permettant de produire des r??sultats coh??rents et compatibles avec vos hypoth??ses ? </td>
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
							<td class="w-50">9) L&#x27;organisation a-t-elle int??gr?? et correctement planifi??, des actions pour traiter ces risques et opportunit??s ? </td>
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
							<td class="w-50">10) Le processus d&#x27;??valuation des risques relatifs ?? la s??curit?? de l&#x27;information suffit-il ?? identifier les risques associ??s ?? la perte de confidentialit??, d&#x27;int??grit?? et de disponibilit?? des informations au sein du champ d&#x27;application du SMSI ? </td>
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
							<td class="w-50">11) Les responsables associ??s ?? la gestion des risques identifi??s ont-ils ??t?? d??sign??s ? </td>
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
							<td class="w-50">12) Les informations sur le processus d&#x27;??valuation des risques relatifs ?? la s??curit?? de l&#x27;information ont-elles ??t?? document??es et sont-elles disponibles ? </td>
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
							<td class="w-50">13) Le processus de traitement des risques relatifs ?? la s??curit?? de l&#x27;information propose-t-il des solutions et des actions, r??alistes et applicables (temps, ressources, moyens) ? </td>
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
							<td class="w-50">14) Des contr??les ont-ils ??t?? d??termin??s pour mettre en ??uvre l&#x27;option appropri??e de traitement des risques choisis ? </td>
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
							<td class="w-50">15) Les contr??les ont-ils ??t?? ??tablies en rapport avec ISO/IEC 27001/2013 Annexe A pour v??rifier qu&#x27;aucun contr??le n??cessaire n&#x27;a ??t?? omis ? </td>
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
							<td class="w-50">16) Avez-vous produit une D??claration d&#x27;applicabilit?? (DDA/SoA) pour justifier les exclusions et inclusions ?? l&#x27;Annexe A, ainsi que le statut de mise en ??uvre du contr??le </td>
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
							<td class="w-50">17) Un plan de traitement des risques relatifs ?? la s??curit?? de l&#x27;information a-t-il ??t?? cr???? et approuv?? par les propri??taires des risques ? </td>
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
							<td class="w-50">18) Les risques r??siduels relatifs ?? la s??curit?? de l&#x27;information ont-ils ??t?? autoris??s par les propri??taires des risques et cela a-t-il ??t?? document?? ? </td>
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
							<td class="w-50">19) Des objectifs du SMSI mesurables ont-ils ??t?? ??tablis, document??s et communiqu??s ?? travers l&#x27;ensemble de l&#x27;organisation ? </td>
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
							<td class="w-50">20) L&#x27;organisation a-t-elle d??termin?? et fourni, les ressources requises pour l&#x27;??tablissement, la mise en ??uvre, la tenue et l&#x27;am??lioration continue du SMSI (en tenant compte des individus, de l&#x27;infrastructure et de l&#x27;environnement pour le fonctionnement des processus) ? </td>
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
							<td class="w-50">21) L&#x27;organisation a-t-elle d??termin?? les connaissances n??cessaires pour les personnes assumant ces r??les au sein du SMSI ? </td>
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
							<td class="w-50">23) Les informations document??es requises par l&#x27;organisation dans le cadre du SMSI sont-elles contr??l??es de sorte ?? ??tre disponibles, prot??g??es, distribu??es, stock??es, conserv??es et soumises au contr??le des changements (y compris les documents d&#x27;origine externe) ? </td>
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
							<td class="w-50">22) Des formations relatives aux exigences de l&#x27;ISO 27001:2013 ont-elles ??t?? r??alis??es ou planifi??es pour toutes les personnes concern??es (responsables sur SMSI, ??quipe d&#x27;audit interne, la direction si n??cessaire) ? </td>
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
							<td class="w-50">24) Les ??valuations des risques relatifs ?? la s??curit?? de l&#x27;information sont-elles conduites ?? des intervalles planifi??s ou ?? la suite de modifications notables, et les informations document??es sont-elles conserv??es ? </td>
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
							<td class="w-50">25) Avez-vous d??termin?? ce qui doit ??tre contr??l?? et mesur??, quand, par qui, les m??thodes ?? utiliser et quand les r??sultats devront ??tre ??valu??s puis document??s ? </td>
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
							<td class="w-50">26) Des audits internes sont-ils conduits r??guli??rement pour v??rifier que le SMSI est efficace et conforme ?? ISO/IEC 27001:2013 ainsi qu&#x27;aux exigences et objectifs de l&#x27;organisation ? Les r??sultats sont-ils rapport??s ?? la direction et conserv??s ? </td>
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
							<td class="w-50">27) Lorsque des non-conformit??s sont identifi??es, l&#x27;organisation a-t-elle ??tabli des processus appropri??s pour g??rer ces non-conformit??s et mettre en place les actions correctives associ??es ? </td>
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
							<td class="w-50">28) La direction entreprend-elle des revues r??guli??res et p??riodiques du fonctionnement et suivi du SMSI et identifie-t-elle des modifications et am??liorations ?? apporter qu&#x27;elle communique aux parties interess??es ? </td>
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
							<td class="w-50">Art9 ??valuation des performances </td>
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
							<td class="w-50">29) Les actions ?? mettre en ??uvre pour contr??ler, corriger et traiter les cons??quences des non-conformit??s ont-elles ??t?? identifi??es et organis??es ainsi que les causes racine en vue d&#x27;??viter qu&#x27;elles ne se reproduisent ? </td>
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
							<td class="w-50">Art 10: Am??lioration </td>
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
							<td class="w-50">30) Les informations document??es requises par l&#x27;organisation dans le cadre du SMSI sont-elles contr??l??es de sorte ?? ??tre disponibles, prot??g??es, distribu??es, stock??es, conserv??es et soumises au contr??le des changements (y compris les documents d&#x27;origine externe) ? </td>
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
	document.write(jour+"/"+mois+"/"+ annee +" ?? "+ heures +":"+minutes);

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
