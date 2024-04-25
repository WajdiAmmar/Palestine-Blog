<?php
class Manager {

    private $pdo;

    // Constructeur prenant l'objet de connexion PDO en paramètre
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    // Méthode pour ajouter un utilisateur (inscription)
    public function ajouter(array $donnees) {
        $sql = "INSERT INTO comptes_utilisateurs (nom, prenom, email, mot_de_passe) VALUES (:nom, :prenom, :email, :mot_de_passe)";
        try {
            $stmt = $this->pdo->prepare($sql);

     // Liaison des valeurs des paramètres avec les valeurs saisies dans le formulaire
            $stmt->bindParam(':nom', $donnees['nom']);
            $stmt->bindParam(':prenom', $donnees['prenom']);
            $stmt->bindParam(':email', $donnees['email']);
            $stmt->bindParam(':mot_de_passe',  $donnees['mot_de_passe']);

            // Exécution de la requête préparée
            $stmt->execute();
            // Affichage d'un message de succès
            echo "Inscription réussie. Vous pouvez maintenant vous connecter.";
        } catch(PDOException $e) {
            // En cas d'erreur, affichage d'un message d'erreur
            echo "Erreur lors de l'inscription: " . $e->getMessage();
        }
    }

    public function verifierAuthentification($email, $motdepasse) {
        $requete = $this->pdo->prepare("SELECT mot_de_passe,email FROM inscri WHERE email = :email");
    
        // Bind des valeurs des paramètres
        $requete->bindvalue(':email', $email);
        // Exécution de la requête préparée
        $requete->execute();
    
        // Récupération des résultats
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] );
            $mot_de_passe = trim($_POST['mot_de_passe'] );
        }
        return ( $mot_de_passe== $resultat['mot_de_passe']);
    }

    public function ajouterMessage($contenu,$user_id) {

   
        // Préparer la requête SQL pour insérer un nouveau message avec l'ID de l'utilisateur
        $sql = "INSERT INTO messages (contenu,user_id) VALUES (:contenu, :user_id)";
        try {
            // Préparer la requête
            $stmt = $this->pdo->prepare($sql);
            
            // Binder les valeurs des paramètres
            $stmt->bindParam(':contenu', $contenu);
            $stmt->bindParam(':user_id', $user_id);
    
            // Exécuter la requête
            $stmt->execute();
    
            // Succès
            echo "Message ajouté avec succès.";
        } catch(PDOException $e) {
            // En cas d'erreur, afficher un message d'erreur
            echo "Erreur lors de l'ajout du message: " . $e->getMessage();
        }
    }
    
    public function recupererMessages() {
        $sql = "SELECT messages.contenu,comptes_utilisateurs.prenom FROM messages,comptes_utilisateurs where messages.user_id=comptes_utilisateurs.user_id ORDER BY id_message ASC";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Erreur lors de la récupération des messages: " . $e->getMessage();
            return false;
        }
    }
}

