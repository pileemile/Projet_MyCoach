<?php include('includes/conexion.php');
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Séance | MyCoach</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <header>
    <h1>Coach Carlos Martinez</h1>  <img src="../photo/Photo-2-768x1091.jpg">
   
  </header>

  <nav>
    <a href="../html/index.html">Accueil</a>
    <a href="#séances">Les séances</a>
  </nav>
  <section class="services-container">
    <h2 id="séances">séances</h2>
 
    <div class="service">
      <?php 
      //seance
      $ReqSeance= "SELECT jour,horraire FROM seance WHERE id=1";
      $ResultSe=$connexion->query($ReqSeance);
      $seance=$ResultSe->fetch();
      //sport 
      $Reqsport="SELECT Nom FROM sport WHERE ID=1 ";
      $resultSport=$connexion->query($Reqsport);
      $sport=$resultSport->fetch();
      //niveau
      $reqNiveau="SELECT niveau FROM niveau WHERE id=1";
      $resultNiveau=$connexion->query($reqNiveau);
      $niveau=$resultNiveau->fetch();
      //salle 
      $reqsalle="SELECT Nom,Adresse,CP,Ville FROM salle Where ID=1";
      $resultSalle=$connexion->query($reqsalle);
      $salle=$resultSalle->fetch();
      // Affichage du jour et de l'horaire
      echo "<h3>Jour : " . $seance['jour'] . ", Horaire : " . $seance['horraire'] . "</h3>";
      echo "<h4> Sport : " . $sport['Nom'] ." " . "niveau : " . $niveau['niveau'] . "</h4>";
      echo "<p> Salle : " . $salle['Nom'] . " " . "adresse : " . $salle['Adresse'] . " " . $salle['CP'] . " " . $salle['Ville'];
  ?>

     </div>

    <div class="service">
    <?php 
      //seance
      $ReqSeance= "SELECT jour,horraire FROM seance WHERE id=2";
      $ResultSe=$connexion->query($ReqSeance);
      $seance=$ResultSe->fetch();
      //sport 
      $Reqsport="SELECT Nom FROM sport WHERE ID=1 ";
      $resultSport=$connexion->query($Reqsport);
      $sport=$resultSport->fetch();
      //niveau
      $reqNiveau="SELECT niveau FROM niveau WHERE id=2";
      $resultNiveau=$connexion->query($reqNiveau);
      $niveau=$resultNiveau->fetch();
      //salle 
      $reqsalle="SELECT Nom,Adresse,CP,Ville FROM salle Where ID=1";
      $resultSalle=$connexion->query($reqsalle);
      $salle=$resultSalle->fetch();
      // Affichage du jour et de l'horaire
      echo "<h3>Jour : " . $seance['jour'] . ", Horaire : " . $seance['horraire'] . "</h3>";
      echo "<h4> Sport : " . $sport['Nom'] ." " . "niveau : " . $niveau['niveau'] . "</h4>";
      echo "<p> Salle : " . $salle['Nom'] . " " . "adresse : " . $salle['Adresse'] . " " . $salle['CP'] . " " . $salle['Ville'];
  ?>
       </div>

    <div class="service">
    <?php 
      //seance
      $ReqSeance= "SELECT jour,horraire FROM seance WHERE id=3";
      $ResultSe=$connexion->query($ReqSeance);
      $seance=$ResultSe->fetch();
      //sport 
      $Reqsport="SELECT Nom FROM sport WHERE ID=2 ";
      $resultSport=$connexion->query($Reqsport);
      $sport=$resultSport->fetch();
      //niveau
      $reqNiveau="SELECT niveau FROM niveau WHERE id=1";
      $resultNiveau=$connexion->query($reqNiveau);
      $niveau=$resultNiveau->fetch();
      //salle 
      $reqsalle="SELECT Nom,Adresse,CP,Ville FROM salle Where ID=2";
      $resultSalle=$connexion->query($reqsalle);
      $salle=$resultSalle->fetch();
      // Affichage du jour et de l'horaire
      echo "<h3>Jour : " . $seance['jour'] . ", Horaire : " . $seance['horraire'] . "</h3>";
      echo "<h4> Sport : " . $sport['Nom'] ." " . "niveau : " . $niveau['niveau'] . "</h4>";
      echo "<p> Salle : " . $salle['Nom'] . " " . "adresse : " . $salle['Adresse'] . " " . $salle['CP'] . " " . $salle['Ville'];
  ?>  
    </div>

    <div class="service">
    <?php 
      //seance
      $ReqSeance= "SELECT jour,horraire FROM seance WHERE id=4";
      $ResultSe=$connexion->query($ReqSeance);
      $seance=$ResultSe->fetch();
      //sport 
      $Reqsport="SELECT Nom FROM sport WHERE ID=3 ";
      $resultSport=$connexion->query($Reqsport);
      $sport=$resultSport->fetch();
      //niveau
      $reqNiveau="SELECT niveau FROM niveau WHERE id=3";
      $resultNiveau=$connexion->query($reqNiveau);
      $niveau=$resultNiveau->fetch();
      //salle 
      $reqsalle="SELECT Nom,Adresse,CP,Ville FROM salle Where ID=3";
      $resultSalle=$connexion->query($reqsalle);
      $salle=$resultSalle->fetch();
      // Affichage du jour et de l'horaire
      echo "<h3>Jour : " . $seance['jour'] . ", Horaire : " . $seance['horraire'] . "</h3>";
      echo "<h4> Sport : " . $sport['Nom'] ." " . "niveau : " . $niveau['niveau'] . "</h4>";
      echo "<p> Salle : " . $salle['Nom'] . " " . "adresse : " . $salle['Adresse'] . " " . $salle['CP'] . " " . $salle['Ville'];
  ?>
   </div>
   <div class="service">
    <?php 
      //seance
      $ReqSeance= "SELECT jour,horraire FROM seance WHERE id=5";
      $ResultSe=$connexion->query($ReqSeance);
      $seance=$ResultSe->fetch();
      //sport 
      $Reqsport="SELECT Nom FROM sport WHERE ID=4 ";
      $resultSport=$connexion->query($Reqsport);
      $sport=$resultSport->fetch();
      //niveau
      $reqNiveau="SELECT niveau FROM niveau WHERE id=2";
      $resultNiveau=$connexion->query($reqNiveau);
      $niveau=$resultNiveau->fetch();
      //salle 
      $reqsalle="SELECT Nom,Adresse,CP,Ville FROM salle Where ID=4";
      $resultSalle=$connexion->query($reqsalle);
      $salle=$resultSalle->fetch();
      // Affichage du jour et de l'horaire
      echo "<h3>Jour : " . $seance['jour'] . ", Horaire : " . $seance['horraire'] . "</h3>";
      echo "<h4> Sport : " . $sport['Nom'] ." " . "niveau : " . $niveau['niveau'] . "</h4>";
      echo "<p> Salle : " . $salle['Nom'] . " " . "adresse : " . $salle['Adresse'] . " " . $salle['CP'] . " " . $salle['Ville'];
  ?>
   </div>
  </section>

  <footer>
    <p>&copy; 2023 MyCoach. Tous droits réservés.</p>
  </footer>
</body>
</html>
