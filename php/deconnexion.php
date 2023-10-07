<?php
// Démarrer une session pour gérer les variables de session
session_start();

// Supprimer la variable de session 'connecte'
unset($_SESSION['connecte']);

// Détruire la session, déconnectant effectivement l'utilisateur
session_destroy();

// Rediriger l'utilisateur vers la page 'index.php'
header("Location: index.php");
?>
