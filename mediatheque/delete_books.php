<?php
include('dao.php');

if (isset($_POST['title'])) {
    $title = $_POST['title'];

    $dao = new DAO();

    try {
        $dao->connexion();
        $dao->bdd->beginTransaction();

        $stmt = $dao->bdd->prepare("SELECT * FROM emprunts WHERE title = :title");
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->execute();
        $rowCount = $stmt->rowCount();

        if ($rowCount === 0) {
            $deleteStmt = $dao->bdd->prepare("DELETE FROM livres WHERE title = :title");
            $deleteStmt->bindParam(':title', $title, PDO::PARAM_STR);
            $deleteStmt->execute();

            // Succès
            echo json_encode(['success' => true, 'message' => 'Le livre a été supprimé avec succès']);
        } else {
            $dao->bdd->rollBack();
            echo json_encode(['success' => false, 'message' => 'Le livre est emprunté, on ne peut pas le supprimer']);
        }

        $dao->bdd->commit();
        $dao->disconnect();

    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Erreur : ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Le nom du livre n\'est pas présent dans la requête']);
}
?>
