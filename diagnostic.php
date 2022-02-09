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



<!--etiquette des exigences-->
<script type="text/JavaScript" src="js/jquery.min.js"></script>
<script type="text/JavaScript" src="js/jspdf.min.js"></script>
<script type="text/JavaScript" src="js/html2pdf.bundle.min.js"></script>
<b>
<div  class="red"; style="background-color:wheat"  id="print2" >
	<div class="col-md">
		<hr>
		<h1 style="width: 100%; text-align: center;">
			<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:#ff2407; text-transform: uppercase;"> <b>QUESTIONNAIRE DE L'AUDIT</b> </a>
		</h1>
		<table class="table table-hover" style="font-size: 15px; padding: 20px;" border="4" cellspacing=4>
			<thead>
				<th>Nom</th>
				<th>reponse </th>
				<th>justifications ou commentaires</th>
				<th></th>
			</thead>
			<tbody>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">4.0 CONTEXTE DE L&#x27;ORGANISATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">4.1 COMPRENDRE L&#x27;ORGANISATION ET SON CONTEXTE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">2.	L&#x27;organisation a-t-elle déterminé les problèmes internes et externes qui sont pertinents pour l&#x27;objectif du SMSI ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">1: 1.	L&#x27;organisation a-t-elle déterminé le ou les objectifs du SMSI ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">3.	L&#x27;organisation a-t-elle déterminé comment les questions internes et externes pourraient influencer la capacité du SMSI à atteindre les résultats escomptés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">4.2 COMPRENDRE LES BESOINS ET LES ATTENTES DES PARTIES INTÉRESSÉES </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">4.	L&#x27;organisation a-t-elle déterminé les parties intéressées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">5.	La liste de toutes les exigences des parties intéressées existe-t-elle ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">4.3 DÉTERMINER LE CHAMP D&#x27;APPLICATION DU SYSTÈME DE GESTION DE LA SÉCURITÉ DE L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">6. La portée est-elle documentée avec des limites et une applicabilité clairement définie ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">4.4 SYSTÈME DE GESTION DE LA SÉCURITÉ DE L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7. Avez-vous établi, documenté, mis en œuvre, maintenu et amélioré en permanence un système de gestion de la sécurité des informations conformément aux exigences de la norme ISO 27001 ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">5.0 LEADERSHIP </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">5.1 LEADERSHIP ET LEADERSHIP DE L&#x27;ENGAGEMENT </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/8" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">8.	Les objectifs généraux du SMSI sont-ils compatibles avec l&#x27;orientation stratégique ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/9" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">9.	La direction s&#x27;assure-t-elle que les ressources ISMS nécessaires sont disponibles selon les besoins ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/10" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">10.	La direction s&#x27;assure-t-elle que le SGSI atteint les résultats escomptés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">5.2 POLITIQUE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/11" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">11.	Existe-t-il une politique de sécurité de l&#x27;information avec des objectifs inclus ou un cadre pour fixer des objectifs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/12" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">12.	La politique de sécurité de l&#x27;information est-elle documentée et communiquée au sein de l&#x27;entreprise et aux autres parties intéressées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">5.3 R RÔLES, RESPONSABILITÉS ET AUTORITÉS DE L&#x27;ORGANISATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/13" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">13. Les rôles, les responsabilités et les pouvoirs en matière de sécurité de l&#x27;information sont-ils attribués et communiqués ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">6.0 PLANIFICATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/8" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">6.1 ACTIONS POUR FAIRE FACE AUX RISQUES ET OPPORTUNITÉS </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/14" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">14.	Les questions internes et externes, ainsi que les exigences des parties intéressées, sontelles prises en compte lors du traitement des risques et des opportunités ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/15" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">15.	Existe-t-il un processus documenté pour identifier les risques de sécurité de l&#x27;information, y compris les critères d&#x27;acceptation des risques et les critères d&#x27;évaluation des risques ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/16" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">16.	Le processus de traitement des risques est-il documenté, y compris les options de traitement des risques et la manière de créer une déclaration d&#x27;applicabilité ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/9" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">6.2 LES OBJECTIFS DE SÉCURITÉ DE L&#x27;INFORMATION ET LA PLANIFICATION POUR LES ATTEINDRE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/17" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">17.	Des objectifs et des cibles en matière de sécurité de l&#x27;information sont-ils établis au niveau des fonctions pertinentes de l&#x27;organisation, mesurés lorsque cela est possible, et cohérents avec la politique de sécurité de l&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/18" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">18.	Existe-t-il un plan, ou un groupe de plans, pour atteindre les objectifs et les cibles de sécurité de l&#x27;information, y compris la responsabilité désignée, la méthode d&#x27;évaluation, ainsi que les moyens et le calendrier du ou des plans ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7.0 SUPPORT </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/10" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7.1 RESSOURCES </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/19" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">19.	Des ressources adéquates sont-elles prévues pour tous les éléments du SGSI ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/11" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7.2 COMPÉTENCE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/20" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">20. Les compétences appropriées sont-elles évaluées, et une formation est-elle dispensée si nécessaire, pour le personnel effectuant des tâches susceptibles d&#x27;affecter la sécurité des informations ? Des registres des compétences sont-ils tenus à jour ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/12" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7.3 SENSIBILISATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/21" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">21. Le personnel connaît-il la politique de sécurité de l&#x27;information, son rôle et les conséquences du non-respect des règles ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/13" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7.4 COMMUNICATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/22" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">22.	Existe-t-il un processus de communication relatif à la sécurité des informations, y compris les responsabilités et ce qu&#x27;il faut communiquer, à qui et quand ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/14" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">7.5 INFORMATIONS DOCUMENTÉES </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/23" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">23.	La documentation du SGSI comprend-elle la politique de sécurité de l&#x27;information, les objectifs et les cibles, le champ d&#x27;application du SGSI, les principaux éléments et leur interaction, les documents et enregistrements de l&#x27;ISO 27001 et ceux identifiés par l&#x27;entreprise ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/24" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">24.	Est-il garanti qu&#x27;une gestion des documents et des enregistrements existe, y compris qui examine et approuve les documents, et où et comment ils sont publiés, stockés et protégés </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/25" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">25.	Les informations documentées d&#x27;origine externe sont-elles contrôlées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">8.0 OPÉRATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/15" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">8.1 PLANIFICATION ET CONTRÔLE OPÉRATIONNELS </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/26" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">26.	L&#x27;organisation dispose-t-elle des informations documentées nécessaires pour être sûre que ses processus sont exécutés comme prévu ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/27" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">27.	Les changements planifiés sont-ils contrôlés ? Les conséquences des changements non planifiés sont-elles examinées afin d&#x27;identifier des mesures d&#x27;atténuation si nécessaire ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/28" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">28.	Les processus externalisés sont-ils identifiés et contrôlés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/16" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">8.2 ÉVALUATION DES RISQUES EN MATIÈRE DE SÉCURITÉ DE L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/29" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">29. Les risques, leurs propriétaires, la probabilité, les conséquences et le niveau de risque sont-ils identifiés ? Ces résultats sont-ils documentés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/17" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">8.3 TRAITEMENT DES RISQUES LIÉS À L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/30" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">30.	Existe-t-il un plan de traitement des risques, approuvé par les propriétaires des risques </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/31" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">31.	Existe-t-il une liste documentée de tous les contrôles jugés nécessaires, avec une justification appropriée et un état de mise en œuvre ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">9.0 ÉVALUATION DU RENDEMENT </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/18" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">9.1 SURVEILLANCE, MESURE, ANALYSE ET ÉVALUATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/32" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">32.	A-t-on défini ce qui doit être mesuré, par quelle méthode, qui est responsable, qui analysera et évaluera les résultats ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/33" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">33.	Les résultats des mesures sont-ils documentés, analysés et évalués par des personnes responsables ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/19" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">9.2 AUDIT INTERNE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/34" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">34.	Existe-t-il un programme d&#x27;audit définissant le calendrier, les responsabilités, les rapports, les critères d&#x27;audit et la portée ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/35" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">35.	Les audits internes sont-ils réalisés conformément à un programme d&#x27;audit, les résultats sont-ils communiqués dans un rapport d&#x27;audit interne et les mesures correctives pertinentes sont-elles prises ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/20" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">9.3 REVUE DE DIRECTION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/36" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">36.	La revue de direction est-elle effectuée régulièrement, et les résultats sont-ils documentés dans le procès-verbal de la réunion ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/37" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">37.	La direction a-t-elle décidé de toutes les questions cruciales importantes pour le succès du SMSI ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/8" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">10.0 AMÉLIORATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/9" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">ANNEXE A </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/21" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.5 POLITIQUES EN MATIERE DE SECURITE DE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/38" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">38.	Existe-t-il des politiques publiées, approuvées par la direction, pour soutenir la sécurité de l&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/39" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">39.	Les politiques de sécurité de l&#x27;information sont-elles revues et mises à jour ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/22" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.6 ORGANISATION DE LA SÉCURITÉ DE L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/40" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">40.	Toutes les responsabilités en matière de sécurité de l&#x27;information sont-elles définies ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/41" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">41.	Les fonctions et les responsabilités sont-elles correctement séparées compte tenu des situations de conflit d&#x27;intérêts ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/43" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">43.	Les contacts avec les groupes d&#x27;intérêts spéciaux ou les associations professionnelles sont-ils définis ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/44" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">45.	Les projets prennent-ils en compte les aspects de sécurité de l&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/46" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">46.	Des règles de manipulation sécurisée des appareils mobiles sont-elles définies ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="Pas vraiment, mais bientôt" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/42" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">42.	Les contacts avec les autorités compétentes sont-ils définis ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/47" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">47.	Existe-t-il des règles définissant comment les informations de l&#x27;organisation sont protégées compte tenu des sites de télétravail ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/23" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.7 SÉCURITÉ DES RESSOURCES </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/50" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">50.	La direction exige-t-elle activement que tous les employés et les contractants se conforment aux règles de sécurité de l&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/51" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">51.	Les employés et les contractants suivent-ils des formations pour mieux s&#x27;acquitter de leurs tâches de sécurité, et existe-t-il des programmes de sensibilisation ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/52" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">52.	L&#x27;organisation dispose-t-elle d&#x27;un processus disciplinaire formel ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/48" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">48.	L&#x27;organisation vérifie-t-elle les antécédents des candidats à l&#x27;embauche ou des contractants ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/49" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">49.	Existe-t-il des accords avec les employés et les contractants qui précisent les responsabilités en matière de sécurité de l&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/53" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">53.	Existe-t-il des accords couvrant les responsabilités en matière de sécurité de l&#x27;information qui restent valables après la fin du contrat de travail ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/24" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.8 GESTION D&#x27;ACTIFS </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/54" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">54.	Existe-t-il un inventaire des actifs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/55" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">55.	Chaque actif figurant dans l&#x27;inventaire des actifs a-t-il un propriétaire désigné ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/56" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">56.	Les règles de traitement des informations et des actifs sont-elles définies ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/57" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">57.	Les biens de l&#x27;entreprise sont-ils restitués par les employés et les contractants lorsque leur emploi prend fin ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/58" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">58.	Les critères de classification des informations sont-ils définis ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/59" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">59.	Existe-t-il des procédures qui définissent la manière d&#x27;étiqueter et de traiter les informations classifiées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/60" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">60.	Existe-t-il des procédures qui définissent la manière de traiter les actifs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/61" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">61.	Existe-t-il des procédures qui définissent la manière de traiter les supports amovibles conformément aux règles de classification ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/62" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">62.	Existe-t-il des procédures formelles pour l&#x27;élimination des médias ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/63" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">63.	Le support qui contient des informations sensibles est-il protégé pendant le transport ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/25" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.9 CONTRÔLE D&#x27;ACCÈS </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/64" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">64.	Existe-t-il une politique de contrôle d&#x27;accès ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/65" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">65.	Les utilisateurs ont-ils accès uniquement aux ressources auxquelles ils sont autorisés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/66" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">66.	Les droits d&#x27;accès sont-ils fournis par le biais d&#x27;un processus d&#x27;enregistrement formel ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/67" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">67.	Existe-t-il un système formel de contrôle d&#x27;accès lors de la connexion aux systèmes d&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/68" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">68.	Les droits d&#x27;accès privilégiés sont-ils gérés avec une attention particulière ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/69" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">69.	Les mots de passe et autres informations secrètes d&#x27;authentification sont-ils fournis de manière sécurisée ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/70" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">70.	Les propriétaires d&#x27;actifs vérifient-ils périodiquement tous les droits d&#x27;accès privilégiés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/71" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">71.	Les droits d&#x27;accès sont-ils mis à jour lorsqu&#x27;il y a un changement dans la situation de l&#x27;utilisateur (par exemple : changement organisationnel ou licenciement) ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/72" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">72.	Existe-t-il des règles pour les utilisateurs sur la manière de protéger les mots de passe et autres informations d&#x27;authentification ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/73" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">73.	L&#x27;accès aux informations dans les systèmes est-il limité conformément à la politique de contrôle d&#x27;accès ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/74" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">74.	La connexion sécurisée est-elle requise sur les systèmes conformément à la politique de contrôle d&#x27;accès ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/75" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">75.	Les systèmes de gestion des mots de passe utilisés par l&#x27;organisation aident-ils les utilisateurs à gérer en toute sécurité leurs informations d&#x27;authentification ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/76" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">76.	L&#x27;utilisation des outils utilitaires est-elle contrôlée et limitée à des employés spécifiques </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/77" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">77.	L&#x27;accès au code source est-il limité aux personnes autorisées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/26" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.10 CRYPTOGRAPHIE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/78" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">78.	Existe-t-il une politique visant à réglementer le cryptage et les autres contrôles cryptographiques ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/79" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">79.	Les clés cryptographiques sont-elles correctement protégées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/27" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.11 SÉCURITÉ PHYSIQUE ET ENVIRONNEMENTALE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/80" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">80.	Existe-t-il des zones sécurisées qui protègent les informations sensibles ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/81" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">81.	L&#x27;entrée des zones sécurisées est-elle protégée ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/82" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">82.	Les zones sécurisées sont-elles situées de manière protégée ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/83" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">83.	Les systèmes d&#x27;alarme, de protection contre l&#x27;incendie et autres sont-ils installés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/84" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">84.	Les procédures de travail dans les zones sécurisées sont-elles définies ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/85" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">85.	Les zones de livraison et de chargement sont-elles protégées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/86" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">86.	L&#x27;équipement est-il correctement protégé ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/87" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">87.	L&#x27;équipement dispose-t-il d&#x27;une protection contre les variations d&#x27;énergie ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/88" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">88.	Les câbles d&#x27;alimentation et de télécommunication sont-ils protégés de manière adéquate ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/89" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">89.	L&#x27;équipement est-il entretenu régulièrement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/90" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">90.	Le déplacement des informations et des équipements en dehors des locaux de l&#x27;organisation est-il contrôlé ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/91" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">91.	Les actifs de l&#x27;organisation sont-ils correctement protégés lorsqu&#x27;ils ne se trouvent pas dans les locaux de l&#x27;organisation ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/92" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">92.	Les informations sont-elles correctement retirées des supports ou des équipements qui seront éliminés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/93" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">93.	Existe-t-il des règles pour protéger les équipements lorsqu&#x27;ils ne sont pas en possession physique de leurs utilisateurs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/94" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">94.	Les utilisateurs sont-ils informés de ce qu&#x27;ils doivent faire lorsqu&#x27;ils ne sont pas présents à leur poste de travail ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/28" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.12 SÉCURITÉ OPÉRATIONNELLE </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/95" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">95.	Les procédures d&#x27;exploitation des processus informatiques sont-elles documentées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/96" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">96.	Les changements qui pourraient affecter la sécurité de l&#x27;information sont-ils strictement contrôlés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/97" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">97.	Les ressources sont-elles contrôlées et des plans sont-ils élaborés pour garantir leur capacité à répondre aux demandes des utilisateurs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/98" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">98.	Les environnements de développement, de test et de production sont-ils séparés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/99" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">99.	Les logiciels antivirus et autres logiciels de protection contre les logiciels malveillants sont-ils installés et utilisés correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/100" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">100.	Une politique de sauvegarde est-elle définie et exécutée correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/101" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">101.	Les événements pertinents provenant des systèmes informatiques sont-ils enregistrés et vérifiés périodiquement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/102" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">102.	Les journaux sont-ils protégés correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/103" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">103.	Les journaux de l&#x27;administrateur sont-ils correctement protégés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/104" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">104.	Les horloges de tous les systèmes informatiques sont-elles synchronisées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/105" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">105 .L&#x27;installation de logiciels est-elle strictement contrôlée ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/106" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">106.	L&#x27;information et la correction des vulnérabilités sont-elles correctement gérées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/107" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">107.	Existe-t-il des règles pour définir les restrictions d&#x27;installation de logiciels par les utilisateurs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/108" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">108.	Les audits des systèmes de production sont-ils planifiés et exécutés correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/109" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">109.	Les réseaux sont-ils contrôlés pour protéger les informations des systèmes et des applications ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/29" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.13 SÉCURITÉ DES COMMUNICATIONS </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/110" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">110.	Les exigences de sécurité pour les services de réseau sont-elles définies et incluses dans les accords ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/111" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">111.	Les réseaux sont-ils séparés en fonction de la classification des risques et des actifs ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/112" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">112.	Le transfert d&#x27;informations est-il correctement protégé ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/113" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">113.	Les accords avec des tiers prennent-ils en compte la protection lors du transfert d&#x27;informations ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/114" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">114.	Les messages qui sont échangés sur les réseaux sont-ils correctement protégés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/115" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">115.	L&#x27;organisation énumère-t-elle toutes les clauses de confidentialité qui doivent être incluses dans les accords avec les tiers ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/30" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.14 ACQUISITION ACQUISITION, DÉVELOPPEMENT ET MAINTENANCE D&#x27;UN SYSTÈME </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/116" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">116.	Les exigences de sécurité sont-elles définies pour les nouveaux systèmes d&#x27;information, ou pour toute modification de ceux-ci ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/117" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">117.	Les informations relatives aux applications transférées via les réseaux publics sontelles protégées de manière appropriée ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/118" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">118.	Les informations relatives aux transactions transférées par les réseaux publics sontelles protégées de manière appropriée ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/119" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">119.	Des règles pour le développement sécurisé des logiciels et des systèmes sont-elles définies ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/120" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">120.	Les modifications apportées aux systèmes nouveaux ou existants sont-elles correctement contrôlées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/121" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">121.	Les applications critiques sont-elles correctement testées après les modifications apportées aux systèmes d&#x27;exploitation ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/122" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">122.	Les systèmes d&#x27;information ne subissent-ils que les modifications nécessaires ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/123" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">123.	Les principes d&#x27;ingénierie des systèmes sécurisés sont-ils appliqués au processus de développement du système d&#x27;organisation ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/124" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">124.	L&#x27;environnement de développement est-il correctement sécurisé ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/125" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">125.	Le développement externalisé des systèmes est-il contrôlé ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/126" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">126.	La mise en œuvre des exigences de sécurité est-elle testée pendant le développement du système ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/127" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">127.	Les critères d&#x27;acceptation des systèmes sont-ils définis ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/128" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">128.	Les données d&#x27;essai sont-elles soigneusement sélectionnées et protégées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/31" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.15 RELATIONS AVEC LES FOURNISSEURS </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/129" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">129.	Existe-t-il une politique sur la manière de traiter les risques liés aux fournisseurs et aux partenaires ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/130" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">130.	Les exigences de sécurité pertinentes sont-elles incluses dans les accords avec les fournisseurs et les partenaires ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/131" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">131.	Les accords avec les prestataires et les fournisseurs incluent-ils des exigences de sécurité ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/132" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">132.	Les fournisseurs sont-ils régulièrement contrôlés ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/133" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">133.	Les changements impliquant des arrangements et des contrats avec des fournisseurs et des partenaires tiennent-ils compte des risques et des processus existants ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/32" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.16 GESTION DES INCIDENTS DE SÉCURITÉ DE L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/134" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">134.	Les incidents sont-ils gérés correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/135" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">135.	Les événements liés à la sécurité de l&#x27;information sont-ils signalés de manière appropriée ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/136" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">136.	Les employés et les contractants signalent-ils les faiblesses de sécurité ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/137" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">137.	Les événements de sécurité sont-ils évalués et classés correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/138" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">138.	Les procédures sur la façon de répondre aux incidents sont-elles documentées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/139" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">139.	Les incidents de sécurité sont-ils analysés correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/140" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">140.	Existe-t-il des procédures qui définissent la manière de collecter les preuves ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/33" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.17. ASPECTS DE LA GESTION DE LA CONTINUITÉ DES ACTIVITÉS LIÉS À LA SÉCURITÉ DE L&#x27;INFORMATION </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/141" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">141.	Les exigences en matière de continuité de la sécurité de l&#x27;information sont-elles définies ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/142" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">142.	Existe-t-il des procédures qui assurent la continuité de la sécurité de l&#x27;information pendant une crise ou un désastre ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/143" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">143.	Des exercices et des tests de continuité sont-ils effectués ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/144" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">144.	La planification et le fonctionnement de l&#x27;infrastructure informatique prévoient-ils une redondance (par exemple, un emplacement secondaire) ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/34" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">A.18 CONFORMITÉ </td>
							<td>
								
								
								
							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/145" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">145.	Les exigences législatives, réglementaires, contractuelles et autres en matière de sécurité sont-elles connues ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/146" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">146.	Existe-t-il des procédures pour protéger les droits de propriété intellectuelle ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/147" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">147.	Les documents sont-ils protégés correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/148" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">148.	Les informations personnelles identifiables sont-elles correctement protégées ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/149" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">149.	Les contrôles cryptographiques sont-ils utilisés correctement ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/150" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">150.	La sécurité de l&#x27;information est-elle régulièrement examinée par un auditeur indépendant ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/151" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">151.	Les responsables vérifient-ils régulièrement si les politiques et procédures de sécurité sont appliquées correctement dans leurs domaines de responsabilité ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non">non</option>
										
									
										
											<option value="oui" selected>oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Diagnostic2/Diagnostic2/152" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="LBBUpxYPID8D7ppXNYhH2TM0hYwHCfYa04URietEQUKshyyehybnsjtx6lqyIIdC">
							<td class="w-50">152.	Les systèmes d&#x27;information sont-ils régulièrement examinés pour vérifier leur conformité aux politiques et normes de sécurité de l&#x27;information ? </td>
							<td>
								
								<select name="reponse" class="form-control">
									
										
											<option value="non" selected>non</option>
										
									
										
											<option value="oui">oui</option>
										
									
								</select>
								
							</td>

							<td>
								
									<input name="justification_ou_commentaire" value="aucune justification" class="form-control">
								
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

<!--etiquette des exigences-->

<div class="lightblue">
	<div class="col-md">

		<h2>
			<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:red " > <b>DATE DU DERNIER AUDIT DE L'AUTODIAGNOSTIC 2
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


<div id="print-btn2"></div>
<button onclick="savePDF()" type="submit" name="print_btn" class="btn btn-outline-primary">TELECHARGER LES DONNEES DE L'AUDIT</button>
<script  language="JavaScript">

function savePDF() {
var element = document.getElementById ("print2")
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
