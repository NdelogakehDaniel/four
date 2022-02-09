<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Navbar</title>
</head>
<body>

<!--navbar-->

<nav class="navbar navbar-dark navbar-expand-lg fixed-top p-0 m-0" id="nav-bar">
    <v-toolbar dark data-app>
        <v-app-bar-nav-icon>
          <img src="images/nexttellogo.png" width="75" height="50">
          <img src="images/Logo%20ENSP.png" width="50" height="50">
        </v-app-bar-nav-icon>
        <v-spacer></v-spacer>
        <v-toolbar-items>
            <v-btn text class="nav-link" href="">Mode d'emploi</v-btn>
            <v-menu open-on-hover offset-y rounded="0">
              <template v-slot:activator="{ on, attrs}">
                <v-btn text dark v-bind="attrs" v-on="on">
                   OUTIL D'AUTODIAGNOSTIC 1
                </v-btn>
              </template>
               <v-list dark>
                <v-list-item class="nav-link" href="diagnostic.php">Diagnostic 2</v-list-item>
                <v-list-item class="nav-link" href="resultats_diagnostic.php">Resultats Diagnostic2</v-list-item>
              </v-list>
              <v-list dark>
                <v-list-item class="nav-link" href="home.php">Exigences</v-list-item>
                <v-list-item class="nav-link" href="mesure_annexe.php">Mesures de l'Annexe A</v-list-item>
                <v-list-item class="nav-link" href="resultats_globaux.php">Résultats Globaux</v-list-item>
                <v-list-item class="nav-link" href="resultats_par_article.php">Résultats par Article</v-list-item>
                <v-list-item class="nav-link" href="resultat_annexeA.php">Résultats de l'Annexe A</v-list-item>
                <v-list-item class="nav-link" href="conseils.php">Conseils</v-list-item>

              </v-list>
            </v-menu>

            <v-menu open-on-hover offset-y rounded="0">
              <template v-slot:activator="{ on, attrs}">
                <v-btn text dark v-bind="attrs" v-on="on">
                   OUTIL D'AUTODIAGNOSTIC 2
                </v-btn>
              </template>
            </v-menu>

            <v-menu open-on-hover offset-y rounded="0">
              <template v-slot:activator="{ on, attrs}">
                <v-btn text dark v-bind="attrs" v-on="on">
                   OUTIL D'AUTODIAGNOSTIC 3: MATURITE
                </v-btn>
              </template>
              <v-list dark>
                <v-list-item class="nav-link" href="maturite.php">Maturite</v-list-item>
                <v-list-item class="nav-link" href="">Resultats_audit_de_Maturite</v-list-item>
              </v-list>
            </v-menu>


            <v-btn text class="nav-link"  href="catographie.php">
                Cartographie

            </v-btn>

            <v-btn text class="nav-link" href="logout.php">Quitter</v-btn>
        </v-toolbar-items>
    </v-toolbar>
  </nav>
<!--navbar-->

</body>
</html>