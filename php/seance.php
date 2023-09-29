<?php include('includes/conexion.php');
  //récupère le fichier ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Séance | MyCoach</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <!-- haut de page -->
  <header>
    <h1>Coach Carlos Martinez</h1>  <img src="../photo/Photo-2-768x1091.jpg">
   
  </header>
<!-- barre de navigation -->
  <nav>
    <a href="../html/index.html">Accueil</a>
    <a href="#séances">Les séances</a>
  </nav>
  <!-- contient le bloque -->
  <section class="services-container">
    <h1>Séances par jour</h1>
<!-- liste déroulante avec un formulaire-->
 <form method="post" id="seancesForm">
  <label for="jour">Sélectionnez un jour :</label>
  <select name="jour" id="jour" onchange="submitForm()">
    <option value="">Sélectionnez un jour</option>
    <option value="Lundi">Lundi</option>
    <option value="Mardi">Mardi</option>
    <option value="Mercredi">Mercredi</option>
    <option value="Jeudi">Jeudi</option>
    <option value="Vendredi">Vendredi</option>
    <option value="Samedi">Samedi</option>
    <option value="Dimanche">Dimanche</option>
    <option value="*">Toutes les séances</option>
  </select>
</form>

<script>
  function submitForm() {
      document.getElementById("seancesForm").submit();
  }
</script>

<div id="service">
  <?php
  // Afficher les séances pour le jour sélectionné
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $jourSelectionne = $_POST['jour'];
      if ($jourSelectionne === '*') {
        $reqSeance = "SELECT seance.horraire, seance.jour, niveau.niveau, sport.Nom AS sport_nom, salle.Nom AS salle_nom, salle.Adresse, salle.CP, salle.Ville
                    FROM seance
                    INNER JOIN sport ON seance.id_sport = sport.ID
                    INNER JOIN niveau ON seance.id_niveau = niveau.id
                    INNER JOIN salle ON seance.id_salle = salle.ID
                    ORDER BY sport_nom";}
      else{
      // Requête pour récupérer les séances du jour sélectionné
      $reqSeance = "SELECT seance.horraire, seance.jour, niveau.niveau, sport.Nom AS sport_nom, salle.Nom AS salle_nom, salle.Adresse, salle.CP, salle.Ville
                    FROM seance
                    INNER JOIN sport ON seance.id_sport = sport.ID
                    INNER JOIN niveau ON seance.id_niveau = niveau.id
                    INNER JOIN salle ON seance.id_salle = salle.ID
                    WHERE jour = '$jourSelectionne'
                    ";
                     
      }
      $result = $connexion->query($reqSeance);
      if (!$result) {
          // Afficher l'erreur SQL
          $errorInfo = $connexion->errorInfo();
          echo "Erreur SQL : " . $errorInfo[2];
      } else {
          // Afficher les séances pour le jour sélectionné ou toutes les séances
          echo "<div id=\"service\">";
          while ($seance = $result->fetch()) {
              echo "<h3>Sport : " . $seance['sport_nom'] . ", Niveau : " . $seance['niveau'] . "</h3>";
               echo "<h4>Jour : " . $seance['jour'] . ", Horaire : " . $seance['horraire'] . "</h4>";
              echo "<p>Salle : " . $seance['salle_nom'] . ", Adresse : " . $seance['Adresse'] . ", " . $seance['CP'] . " " . $seance['Ville'] . "</p>";
          }
  }
}
  ?>
</div>  

  </section>
<!-- pied de page -->
  <footer>
    <p>&copy; 2023 MyCoach. Tous droits réservés.</p>
  </footer>
</body>
</html>
