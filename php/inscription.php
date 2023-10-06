<!DOCTYPE html>
<html>
<head>
  <title>Inscription</title>
  <link rel="stylesheet" type="text/css" href="../css/seance.css">
</head>
<body>
  <header>
    <h1>Inscription</h1>
  </header>

  <section>
    <div class="services-container">
      <div class="service">
        <h3>Inscription</h3>
        <form action="includes/connexion_utilisateur.php" method="post">
          <label for="identifiant">Nom d'utilisateur:</label><br>
          <input type="text" id="identifiant" name="identifiant"><br>
          <label for="mdp">Mot de passe:</label><br>
          <input type="password" id="mdp" name="mdp"><br><br>
          <input type="submit" value="S'inscrire">
        </form>
      </div>
    </div>
  </section>

  <footer>
    &copy; 2023 Mon Site Web
  </footer>
</body>
</html>
