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
<!--entete sur toutes les pages-->
<h1>  Autodiagnostic selon la norme ISO 27001: 2013</h1>
<hr>
<!--entete sur toutes les pages-->


<!--navbar-->

<?php
include('navbar.php');
?>

<!-- end of navbar -->
<script src="js/vue.js"></script>
<script src="js/vuetify.js"></script>
<script>
    new Vue({
      el: '#nav-bar',
      vuetify: new Vuetify(),
    })
</script>


<!--etiquette des exigences-->
<script type="text/JavaScript" src="js/jspdf.min.js"></script>
<script type="text/JavaScript" src="js/jquery.min.js"></script>
<script type="text/JavaScript" src="js/jspdf.min.js"></script>
<script type="text/JavaScript" src="js/html2pdf.bundle.min.js"></script>
<b>
<div  class="red"; style="background-color:wheat"  id="print1">
	<div class="col-md">
		<hr>
		<h1 style="width: 100%; text-align: center;">
			<a class="btn btn-primary btn-lg btn-block"; style="background-color:#ff2407; text-transform: uppercase;" > <b>Liste des Exigences</b> </a>
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
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art7: Support </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								20.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/10" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">7.1: Ressources </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/43" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr43: L’organisation a déterminé et fourni les ressources requises pour l’établissement, la mise en œuvre, la tenue et l’amélioration continue du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/11" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">7.2:Compétences </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								15.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/44" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr44: Les compétences nécessaires des personnes dont le travail a une incidence sur les performances du SI sont déterminées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/45" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr45: Les compétences du personnel sont évaluées sur la base d&#x27;une formation ou d&#x27;une expérience appropriée </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/46" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr46: L&#x27;organisme met en place et évalue l&#x27;efficacité des actions pour acquérir ou renforcer les compétences nécessaires au bon fonctionnement du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/47" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr47: Les informations documentées sur les compétences du personnel sont conservées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/12" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">7.3: Sensibilisation </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								20.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/48" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr48 </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/49" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr49: L&#x27;organisme s&#x27;assure que le personnel est conscient de sa contribution à l&#x27;efficacité du SMSI ainsi qu&#x27;aux effets positifs d&#x27;une amélioration des performances de la sécurité de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/50" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr50: Le personnel est conscient des implications de toute non-conformité aux exigences requises par le SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/13" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">7.4:Communication </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/51" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr51: La pertinence des besoins de communication interne est déterminée </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/52" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr52: La pertinence des besoins de communication externe est déterminée </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/53" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr53: Les modalités de communication interne sont déterminées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/54" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr54: Les modalités de communication externe sont déterminées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/14" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">7.5: Informations documentées </td>
							<td>
								
								Insuffisant
								
							</td>
							<td>
								
								8.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/55" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr55: Les informations documentées du SMSI comprennent celles exigées par l&#x27;ISO 27001 et celles nécessaires à son efficacité </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/56" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr56: Toute information documentée est identifiée, décrite et approuvée de manière compréhensible dans un format et sur un support accessible </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/57" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr57: Le contenu des informations documentées est revu périodiquement en termes de pertinence et d&#x27;adéquation à l&#x27;usage </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/58" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr58:  Les informations documentées sont utiles, utilisables et utilisées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/59" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr59:  Les modifications des informations documentées sont maitrisées (contrôle des versions par exemple) </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/60" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr60: La gestion des informations documentées est bien maîtrisée en termes de distribution, accès, stockage, protection, conservation et élimination </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/61" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr61: Les informations documentées externes sont identifiées et maitrisées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art8: Fonctionnement </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								34.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/15" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">8.1: Planification et contrôle opérationnels </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								24.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/62" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr62: Les processus nécessaires à la satisfaction des exigences liés à la sécurité de l&#x27;information sont planifiés, mis en œuvre et maîtrisés </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/63" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr63: Des plans pour atteindre les objectifs de sécurité de l&#x27;information définis en 6.2 sont mis en œuvre </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/64" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr64: Les informations documentées sont conservées pour avoir l&#x27;assurance que les processus ont été suivis comme prévu </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/65" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr65: L&#x27;organisation doit contrôler les modifications prévues, analyser les conséquences des modifications imprévues et, si nécessaire, mener des actions pour limiter tout effet négatif </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/66" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr66: Les processus externalisés sont maîtrisés </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/16" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">8.2: Appréciation des risques de sécurité de l&#x27;information </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/67" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr67: Des appréciations de risques de sécurité de l&#x27;information à des intervalles planifiés, quand des changements significatifs sont prévus ou ont lieu sont réalisés </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/68" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr68:Les informations documentées sur les résultats du traitement des risques de sécurité de l&#x27;information sont conservées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/17" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">8.3: Traitement des risques de sécurité de l&#x27;information </td>
							<td>
								
								Convaincant
								
							</td>
							<td>
								
								50.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/69" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr69: Le plan de traitement des risques de sécurité de l&#x27;information est mis en œuvre </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/70" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr70: Les informations documentées sur les résultats de traitement des risques de sécurité de l&#x27;information sont conservées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art9 Évaluation des performances </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								33.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/18" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">9.1: Surveillance, mesure, analyse et évaluation </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/71" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr71: Les performances de sécurité de l&#x27;information ainsi que l&#x27;efficacité du SMSI sont évaluées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/72" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr72: Ce qui est nécessaire de surveiller et de mesurer est déterminé </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/73" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr73: Les méthodes de surveillance, de mesurage, d&#x27;analyse et d&#x27;évaluation, pour assurer la validité des résultats sont déterminées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/74" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr74: L&#x27;organisme détermine quand la surveillance et les mesures doivent être effectuées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/75" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr75: L&#x27;organisme détermine qui doit effectuer la surveillance et les mesures </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/76" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr76: L&#x27;organisme détermine quand les résulats de la surveillance et des mesures doivent-être analysées et évaluées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/77" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr77: L&#x27;organisme détermine qui doit analyser et évaluer les résultats </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/78" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr78: Les informations documentées appropriées comme preuves des résultats de la surveillance et des mesures sont conservées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/19" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">9.2: Audit interne </td>
							<td>
								
								Convaincant
								
							</td>
							<td>
								
								70.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/79" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr79: Les audits internes sont planifiés, établis et mis en œuvre à des intervalles déterminés </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/80" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr80: Les critères et le périmètre de chaque audit sont définis </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/81" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr81: Les auditeurs sont sélectionnés en s&#x27;assurant de l&#x27;objectivité et de l&#x27;impartialité du processus d&#x27;audit. </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/82" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr82: Les résultats des audits sont communiqués à la direction concernée </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="80.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/83" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr83: Des informations documentées sont conservées comme preuves de la mise en œuvre du programme d&#x27;audit et  de ses résultats. </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/20" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">9.3: Revue de direction </td>
							<td>
								
								Insuffisant
								
							</td>
							<td>
								
								0.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/86" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr86: La revue de direction prend en compte les modifications des enjeux externes et internes pertinents pour le SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/84" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr84: La revue du SMSI est réalisée à des intervalles planifiés pour s&#x27;assurer de son efficacité et adéquation avec la stratégie de l&#x27;organisme </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/85" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr85: La revue de direction prend en compte l&#x27;état d&#x27;avancement des actions décidées à l&#x27;issue des revues de direction précédentes </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/87" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr87: La revue de direction prend en compte les retours sur les performances de sécurité de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/88" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr88: La revue de direction prend en compte les retours d&#x27;informations des parties intéressées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/90" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr90: La revue de direction prend en compte les opportunités d&#x27;amélioration continue </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/89" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr89: La revue de direction prend en compte les résultats de l&#x27;appréciation des risques et l&#x27;état d&#x27;avancement du plan de traitement des risques </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/91" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr91: La revue de direction fournit des décisions et actions sur les opportunités d’amélioration, le besoin de modifier le SMSI et le besoin en ressources </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/92" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr92: Les éléments de sortie des revues de direction sont conservés sous forme d&#x27;informations documentées. </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art 10: Amélioration </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/21" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">10.1: Non-conformité et action corrective </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/93" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr 93: L’organisme réagit à chaque non-conformité pour la corriger, la maîtriser et prendre en charge les conséquences </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/94" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr94: L’organisme évalue la nécessité de traiter les causes des non-conformités </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/95" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr95: L’organisme met en œuvre toutes les actions correctives requises </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/96" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr96: L&#x27;organisation révise l&#x27;efficacité de toute action corrective mise en œuvre </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/97" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr97: L&#x27;organisme modifie, si nécessaire, le SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/98" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr98: Les actions correctives sont à la mesure des effets des non-conformités </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/99" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr99: L&#x27;organisation doit conserver des informations documentées comme preuves de la nature des non-conformités et de toute action subséquente et des résultats de toute action corrective </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/22" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">10.2:  Amélioration continue </td>
							<td>
								
								Conforme
								
							</td>
							<td>
								
								95.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/100" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr100 L’organisme s’engage à améliorer en continu la pertinence, l&#x27;adéquation et la performance du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai" selected>Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="95.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art 4: Contexte de l&#x27;organisme </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								23.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">4.2: Compréhension des besoins et des attentes des parties intéressées </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr4: Les parties intéressées pertinentes sont identifiées dans la cadre du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr5: Les exigences  des parties intéressées ainsi que celles légales et réglementaires sont prises en considération dans le SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">4.3: Détermination du domaine d&#x27;application du système de management de la sécurité de l&#x27;information </td>
							<td>
								
								Faux
								
							</td>
							<td>
								
								32.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr6: Le domaine d&#x27;application du SMSI est établi en déterminant ses limites et son applicabilité </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr7: Le domaine d&#x27;application du SMSI prend en compte les enjeux externes et internes auquel il est fait référence en 4.1 </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/8" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr8: Le domaine d&#x27;application du SMSI prend en compte les exigences auquel il est fait référence en 4.1 et 4.2 </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/9" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr9: Le domaine d&#x27;application du SMSI prend en compte les interfaces et les dépendances existantes entre les activités réalisées par l&#x27;organisation et celles réalisées par d&#x27;autres organisations </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/10" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr10: Le domaine d&#x27;application doit être disponible sous forme d&#x27;information documentée </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">4.4: Système de Management de la Sécurité de l&#x27;Information </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/11" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr11: Le SMSI est établi, mis en oeuvre, tenu à jour et amélioré en continu </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">4.1: Compréhension de l&#x27;organisme et de son contexte </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								0.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr2: Les informations relatives aux enjeux externes et internes sont surveillées et revues périodiquement </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr3: Les facteurs d&#x27;influence sur l&#x27;efficacité du Système de Management de la Sécurité de l&#x27;Information (SMSI) sont identifiés </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr1: Les enjeux internes et externes sont déterminés relativement à la finalité et l&#x27;orientation stratégique de l&#x27;organisme </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art 5: Leadership </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								40.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">5.2: Politique </td>
							<td>
								
								Convaincant
								
							</td>
							<td>
								
								60.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/16" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr16: La politique de sécurité de l&#x27;information est adaptée à la mission de l&#x27;organisme en incluant des objectifs de sécurité de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/17" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr17: La direction améliore sa politique de sécurité de l&#x27;information en satisfaisant les exigences relatives à la sécurité de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/18" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr18: La politique de sécurité de l&#x27;information est disponible et tenue à jour sous forme d&#x27;une information documentée </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/19" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr19: La politique de sécurité de l&#x27;information est communiquée au sein de l&#x27;organisme </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/20" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr20: La politique de sécurité de l&#x27;information est mise à la disposition des parties intéressées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">5.3: Rôles, responsabilités et autorités au sein de l&#x27;organisme </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								20.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/21" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr21: La direction s&#x27;assure que les responsabilités et les rôles au sein du SMSI sont attribués et communiqués </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/22" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr22: Les responsabilités et autorités s&#x27;assurant que le SMSI est conforme à la norme ISO 27001 sont désignées par la direction </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/23" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr23: Les responsabilités et autorités évaluent et reportent à la direction les performances du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">5.1: Leadership et engagement </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								40.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/13" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr 13: La direction assure que les ressources nécessaires pour le bon fonctionnement du SMSI sont disponibles et que celui-ci produit les résultats escomptés </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/14" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr 14: La direction communique sur l&#x27;importance de disposer d&#x27;un SMSI efficace et de son amélioration continue </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/15" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr 15: La direction  oriente et soutient toutes les personnes pouvant contribuer à l&#x27;efficacité du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/12" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr12: La direction assume la responsabilité de la politique et des objectifs  du SMSI, son intégration avec les processus métier et l&#x27;information nécessaire à la bonne implication du personnel </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art6: Planification </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								38.75
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/9" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">6.2: Objectifs sécurité et planification pour les atteindre </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								32.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/38" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr38: Des objectifs de sécurité de l&#x27;information sont établis aux fonctions, niveaux et processus nécessaires au bon fonctionnement du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/39" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr39: Les objectifs de sécurité de l&#x27;information sont pertinents, mesurables et cohérents avec la politique sécurité de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai" selected>Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="95.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/40" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr40: Les objectifs de sécurité de l&#x27;information sont surveillés, tenus à jour et communiqués </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/41" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr41: Les informations documentées sur les objectifs qualité sont tenues à jour </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/42" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr42: Pour atteindre les objectifs de sécurité de l&#x27;information, l&#x27;organisme détermine le responsable, les actions, les ressources, les échéances et les modalités d&#x27;évaluation des résultats </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/8" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">6.1: Actions liées aux risques et opportunités </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								45.5
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/25" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr25: L&#x27;organisme planifie et met en oeuvre les actions face aux risques et opportunités sélectionnés </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/26" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr26: La manière d&#x27;intégrer et de mettre en œuvre les actions au sein du SMSI est planifiée </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/27" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr27: L&#x27;évaluation de l&#x27;efficacité de ces actions au sein des processus du SMSI est planifiée </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/28" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr28: Un processus d&#x27;application des risques relatifs à la sécurité de l&#x27;information a été établi incluant des critères d&#x27;acceptation et d&#x27;appréciation des risques </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai" selected>Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="95.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/29" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr29: Le processus d&#x27;application des risques s&#x27;assure que la répétition des appréciations des risques produits des résultats cohérents </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/30" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr30: Le processus d&#x27;application des risques identifie et analyse les risques de sécurité de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/31" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr31: L&#x27;organisation conserve les informations documentées sur le processus d&#x27;appréciation des risques de sécurité de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/32" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr32: L&#x27;organisation a défini et appliqué un processus de traitement des risques de sécurité de l&#x27;information en déterminant et comparant les mesures mises en œuvre avec l&#x27;annexe A </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/33" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr33: L&#x27;organisme a produit une déclaration d&#x27;applicabilité pour justifier les exclusions et inclusions à l&#x27;annexe A </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/34" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr34: Un plan de traitement des risques relatifs à la sécurité de a été créé </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/35" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr35: Les propriétaires des risques ont revu et approuvé le plan </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/36" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr36: Les risques résiduels relatifs à la sécurité de l&#x27;information ont été autorisés par les propriétaires des risques </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/37" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr37: Les informations documentés sur le processus de traitement des risques de l&#x27;information sont conservées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/24" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr24: Les risques et opportunités sont pris en compte pour améliorer la performance du SMSI en lien avec les enjeux à relever et les exigences à satisfaire </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai" selected>Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="92.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
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
</b>
<!--etiquette des exigences-->
<div class="lightblue">
	<div class="col-md">

		<h2>
			<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:red " > <b>DATE DU DERNIER AUDIT SUR LES EXIGENCES
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

</div>

<div id="print-btn1"></div>
<button onclick="savePDF()" type="submit" name="print_btn" class="btn btn-outline-primary">TELECHARGER LES DONNEES DE L'AUDIT</button>

<script  language="JavaScript">

function savePDF() {
var element = document.getElementById ("print1")
html2pdf(element);

};
</script>



<hr>
<footer>
<?php
	include('footer.php');
?>
</footer>

<script src="../../../cdn.jsdelivr.net/npm/bootstrap%404.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>
</html>
