<?php

    // Inclusion de la classe Manager
require_once("connexion.php");
function chargerClasse($classname)
{
    require $classname . '.class.php';
}

spl_autoload_register('chargerClasse');

$dsn = "mysql:dbname=" . DB_NAME . ";host=" . DB_HOST;

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
$manager = new Manager($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contenu = $_POST['contenu'];
    $user_id=$_SESSION['user_id'];
    $manager->ajouterMessage($contenu,$user_id);

}
// Récupération des messages du forum
$messages = $manager->recupererMessages();
?>

