<?php
// Inclure le fichier de connexion à la base de données
include('/includes/conexion.php');
//start de la session 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    try {
        
     // Préparer la requête SQL pour l'insertion
     $sql = "INSERT INTO utilisateur (nom, prenom, mail, mdp) VALUES ('$nom', '$prenom', '$mail', '$mdp')";
      // Exécuter la requête
    $result = $connexion->exec($sql);
        // Si l'insertion réussit
        echo "Nouvel utilisateur ajouté avec succès.";
        $_SESSION['connecte'] = true;
        //gestion de l'erreur 
    } catch (PDOException $e) {
        echo "Erreur lors de l'ajout de l'utilisateur : " . $e->getMessage();
    }finally {
        $connexion = null; // Fermer la connexion 
        header("Location: seance.php"); //redirige a la page seance
    }
    
  
}
?>
