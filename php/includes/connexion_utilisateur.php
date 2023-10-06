<?php
require 'conexion.php'; 

// Initialisation des messages d'erreur
$errorMessage = '';

// Vérification que le formulaire a été soumis 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifiant = $_POST["username"];
    $mdp = $_POST["password"];
}

try {
    // Requête de sélection
    $sql = "SELECT * FROM utilisateur WHERE identifiant = :identifiant";

    $_SESSION['identifiant'] = $identifiant;

    // Préparation de la requête
    $stmt = $connexion->prepare($sql);

    // Liaison des paramètres
    $stmt->bindParam(':identifiant', $identifiant);

    // Exécution de la requête
    $stmt->execute();

    // Récupération du résultat
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérification du résultat
    if ($user) {
        // L'utilisateur existe

        // Vérification du mot de passe
        if (password_verify($mdp, $user['mdp'])) {
            // Le mot de passe correspond

            // Vous pouvez accéder aux valeurs de l'utilisateur
            $_SESSION['nom'] = $user['nom']; // Stockage du nom dans la variable de session
            $_SESSION['prenom'] = $user['prenom']; // Stockage du prénom dans la variable de session
            
            // Redirection vers la page seance
            header("Location: ../seance.php");
            exit();
        } 
        
        else {
            // Le mot de passe ne correspond pas
            $errorMessage = 'Identifiant ou mot de passe incorrect.';
        }
    } else {
        // L'utilisateur n'existe pas
        $errorMessage = 'Identifiant ou mot de passe incorrect.';
    }
} catch (PDOException $e) {
    // Gestion des erreurs de la base de données
    $errorMessage = 'Erreur de base de données : ' . $e->getMessage();
}

?>

