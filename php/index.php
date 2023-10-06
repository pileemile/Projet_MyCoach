<?php
session_start(); // Démarrage de la session
include('includes/headerNav.php');

?>


<!DOCTYPE html>
<html>
  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--titre de la page --> 
  <title>Accueil | MyCoach</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<!--corps de la page-->
<body>
  
  
  <nav>
    <a href="#presentation">Présentation</a>
    <a href="#prestation">Mes Prestations</a>
  </nav>
  <!--bloc qui contient la présentation du coach-->
  <section class="services-container">
    <h2 id="presentation">Présentation</h2>
    <div class="service">
      <p>Expérience : Carlos est un coach sportif certifié avec plus de 10 ans d'expérience dans le domaine de la remise en forme. Il a travaillé avec des clients de tous âges et de tous niveaux de forme physique, de débutants à avancés.
      </p>
    </div>
  </section>
  <!--bloque qui contient toute les prestations-->
  <section class="services-container">
    <h2 id="prestation">Mes Prestations</h2>
<!--bloque qui contient une seul prestation -->
    <div class="service">
      <h3>Boxe </h3>
      <p> Carlos a une solide expérience en boxe, ayant pratiqué ce sport depuis son enfance. Il peut vous enseigner les techniques de base de la boxe, améliorer votre agilité, votre coordination et votre condition physique générale.</p>
    </div>

    <div class="service">
      <h3>Renforcement musculaire</h3>
      <p>Carlos est un expert en renforcement musculaire. Il concevra un programme personnalisé en fonction de vos objectifs, qu'il s'agisse de développer votre force, d'augmenter votre masse musculaire ou de tonifier votre corps.
      </p>
       </div>

    <div class="service">
      <h3>Zumba </h3>
    <p>Carlos est également certifié en Zumba et peut vous aider à améliorer votre coordination, à brûler des calories et à vous amuser en dansant sur des rythmes entraînants.
    </p>  
    </div>

    <div class="service">
      <h3>Musculation </h3>
     <p>Si vous cherchez à vous engager sérieusement dans la musculation, Carlos peut vous aider à élaborer un plan d'entraînement efficace et à vous guider dans l'utilisation correcte des équipements de musculation</p>
    </div>
  </section>
<!--pied de page -->
<?php include('includes/footer.php');?>
</body>
</html>
