<?php

require_once 'dao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assurez-vous que les données du formulaire sont présentes et non vides
    if (!empty($_POST['lastname']) && !empty($_POST['name']) && !empty($_POST['member_id'])) {

        // Récupérez les valeurs du formulaire
        $nom = $_POST['lastname'];
        $prenom = $_POST['name'];
        $carte_membre = $_POST['member_id'];

        // Connexion à la base de données
        require_once 'dao.php';
        $dao = new DAO();
        $dao->connexion();

        // Utilisez des requêtes préparées pour éviter les injections SQL
        $query = "INSERT INTO utilisateurs (nom, prenom, carte_membre) VALUES (:nom, :prenom, :carte_membre)";
        $statement = $dao->bdd->prepare($query);

        // Liaison des valeurs
        $statement->bindParam(':nom', $nom);
        $statement->bindParam(':prenom', $prenom);
        $statement->bindParam(':carte_membre', $carte_membre);

        // Exécutez la requête
        if ($statement->execute()) {
            echo "Utilisateur ajouté avec succès.";
        } else {
            echo "Erreur lors de l'ajout de l'utilisateur : " . $statement->errorInfo()[2];
        }

        // Fermez la connexion à la base de données
        $dao->disconnect();
    } else {
        echo "Tous les champs du formulaire doivent être remplis.";
    }
} else {
    echo "La requête n'est pas de type POST.";
}
?>
