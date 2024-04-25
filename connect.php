<?php
session_start();
require_once("connexion.php");

$dsn = "mysql:dbname=" . DB_NAME . ";host=" . DB_HOST;

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $mot_de_passe = trim($_POST['mot_de_passe'] ?? '');

    if (!empty($email) && !empty($mot_de_passe)) {
         $requete = $pdo->prepare("SELECT user_id FROM comptes_utilisateurs WHERE email = :email AND mot_de_passe = :mot_de_passe");
        $requete->bindParam(':email', $email);
        $requete->bindParam(':mot_de_passe', $mot_de_passe);
        $requete->execute();
        $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

        if ($utilisateur) {
            $_SESSION['user_id'] = $utilisateur['user_id'];
            header('Location: blog.php');
            exit(); // Assure que le script s'arrête après l'affichage du contenu
        } else {
            echo "Email ou mot de passe incorrect !";
        }
    } else {
        echo "Veuillez fournir une adresse e-mail et un mot de passe.";
    }
}
?>



