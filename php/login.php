<?php include('includes/connexion_utilisateur.php');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Séance | MyCoach</title>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

  <header>
    <!-- En-tête ici -->
  </header>

  <section class="login-container">
    <h2>Login</h2>
    <form action="seance.php" method="post">
      <label for="username">identifiant:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">mot de passe:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
    </form>
  </section>


</body>
</html>
