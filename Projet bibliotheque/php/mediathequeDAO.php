<?php

class DAO {
    private $host = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $database = "mediatheque";
    private $charset = "utf8";
    public $bdd;
    private $error;

    public function __construct() {
        $this->connexion();
    }

    public function connexion() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database};charset={$this->charset}";
            $this->bdd = new PDO($dsn, $this->user, $this->password);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->error = 'Erreur : ' . $e->getMessage();
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public function disconnect() {
        $this->bdd = null;
    }

    public function getLastError() {
        return $this->error;
    }

    // Afficher la liste des livres
    public function getListeLivresAvecStatut() {
        try {
            // Requête SQL pour récupérer la liste des livres avec leur statut
            $query = "SELECT livres.ID_Livres, livres.title, livres.statut, emprunts.Date_Retour_Reelle, shortDescription
            FROM livres
            LEFT JOIN emprunts ON livres.ID_Livres = emprunts.ID_Livre";

            // Exécution de la requête
            $stmt = $this->bdd->query($query);

            // Récupération des résultats
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Affichage des résultats
            echo "<h2>Catalogue des livres</h2>";
            echo "<table border='5'>
                    <tr>
                        <th>ID Livre</th>
                        <th>Titre</th>
                        <th>Statut</th>
                        <th>Date Retour Réelle</th>
                        <th>Descriptions<th>
                    </tr>";
            
                    foreach ($result as $row) {
                        echo "<tr>
                                <td>{$row['ID_Livres']}</td>
                                <td>{$row['title']}</td>
                                <td>" . ($row['Date_Retour_Reelle'] ? 'Prêté' : 'Disponible') . "</td>
                                <td>{$row['Date_Retour_Reelle']}</td>
                                <td class='description-cell'>{$row['shortDescription']}</td>
                                <td><button class='toggle-description-btn' data-book-id='{$row['ID_Livres']}'>Afficher/Masquer</button></td>
                             </tr>";
                    }
            echo "</table>";

        } catch (PDOException $e) {
            $this->error = 'Erreur : ' . $e->getMessage();
            die("Erreur lors de la récupération des livres : " . $e->getMessage());
        }
    }

    // Afficher la liste des utilisateurs
    public function getListeUtilisateurs() {
        try {

        // Requête SQL pour récupérer la liste des utilisateurs
        $query = "SELECT utilisateurs.Carte_Membre_Info, utilisateurs.Nom, utilisateurs.Prenom
        FROM utilisateurs";

        // Exécution de la requête 
        $stmt = $this->bdd->query($query);

        // Récupération des résultats
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Affichage des résultats
        echo "<h2>Listes des utilisateurs</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Carte Membre</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                <tr>";

        foreach ($result as $row) {
            echo "<tr>
                    <td>{$row['Carte_Membre_Info']}</td>
                    <td>{$row['Nom']}</td>
                    <td>{$row['Prenom']}</td>
                </tr>";
        }
        echo "</table>";

        }   catch (PDOException $e) {
            $this->error = 'Erreur : ' . $e->getMessage();
            die("Erreur lors de la récupération des utilisateurs : " . $e->getMessage());
        }
    }
}

?>
