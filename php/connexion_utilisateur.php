<?php
require '/includes/conexion.php';
session_start();
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération de l'adresse e-mail et du mot de passe
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $_SESSION['mail'] = $mail; // Stockage de l'adresse e-mail dans la variable de session

    // Requête de sélection
    $sql = "SELECT * FROM utilisateur WHERE mail = :mail";

    // Préparation de la requête
    $stmt = $connexion->prepare($sql);

    // Liaison des paramètres
    $stmt->bindParam(':mail', $mail);

    // Exécution de la requête
    $stmt->execute();

    // Récupération du résultat
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump ($user);
    
    // Vérification du résultat
    if ($user) {
        // L'utilisateur existe
        //password_verify verifie est hacher 
        // Vérification du mot de passe
        if (($user['mdp'])==($mdp)) {
            // Le mot de passe correspond

            // Vous pouvez accéder aux valeurs de l'utilisateur
            $_SESSION['nom'] = $user['nom']; // Stockage du nom dans la variable de session
            $_SESSION['prenom'] = $user['prenom']; // Stockage du prénom dans la variable de session
            $_SESSION['connecte'] = true;
            header("Location: seance.php");
            exit;
        } else {
            header("Location: login.php");
            // Le mot de passe ne correspond pas
            echo 'Adresse e-mail ou mot de passe incorrect.';

        }
    } else {
        header("Location: login.php");
        // L'utilisateur n'existe pas
        0echo 'Adresse e-mail ou mot de passe incorrect.';
    }
}
?>