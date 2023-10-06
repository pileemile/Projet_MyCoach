<?php //include('connexion_utilisateur.php');
include('includes/headerNav.php');


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Séance | MyCoach</title>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

  <section class="login-container">
    <h2>Login</h2>
    <form action="connexion_utilisateur.php" method="post">
      <label for="mail">identifiant:</label>
      <input type="text" id="mail" name="mail" required>

      <label for="mdp">mot de passe:</label>
      <input type="password" id="mdp" name="mdp" required>

      <button type="submit">Login</button>
    </form>
  </section>

  <?php include('includes/footer.php');
?>
</body>

</html>
