<?php //inclu la page header 
include('includes/headerNav.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription | MyCoach</title>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
  <!-- formulaire d'inscription -->
  <section class="login-container">
    <h2>Inscription</h2>
    <form action="inscription_utilisateur.php" method="post">
      <label for="nom">Nom:</label>
      <input type="text" id="nom" name="nom" required>

      <label for="prenom">Prénom:</label>
      <input type="text" id="prenom" name="prenom" required>

      <label for="mail">Adresse email:</label>
      <input type="email" id="mail" name="mail" required>

      <label for="mdp">Mot de passe:</label>
      <input type="password" id="mdp" name="mdp" required>

      <button type="submit">S'inscrire</button>
    </form>
  </section>

  <?php //inclu la page footer 
  include('includes/footer.php');
  ?>

</body>
</html>
