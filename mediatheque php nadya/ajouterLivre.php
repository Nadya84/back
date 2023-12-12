<?php
$user = 'root';
$pass = '';

try {
    $db = new PDO('mysql:host=localhost;dbname=mediatheque', $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['titre']) && isset($_POST['isbn']) && isset($_POST['categories']) && isset($_POST['auteurs']) && isset($_POST['image']) && isset($_POST['nombre_de_page']) && isset($_POST['Description'])) {
        $titre = $_POST['titre'];
        $titre = $_POST['isbn'];
        $titre = $_POST['categories'];
        $titre = $_POST['auteurs'];
        $titre = $_POST['image'];
        $titre = $_POST['nombre_de_page'];
        $titre = $_POST['Description'];

        $requete = $db->prepare("INSERT INTO livres (titre, isbn, categories, auteurs, image, nombre_de_page, Description   ) VALUES (?, ?)");
        $requete->execute([$titre, $isbn, $categories, $auteurs, $image, $nombre_de_page, $Description]);
       
        echo "Livre ajouté avec succès!";
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
} catch (PDOException $e) {
    echo "Erreur :" . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un livre</title>
</head>
<body>
    <h2>Ajouter un livre</h2>
    <form action="" method="post">
        <label for="titre">Titre:</label><br>
        <input type="text" id="titre" name="titre"><br><br>

        <label for="isbn">isbn:</label><br>
        <input type="text" id="isbn" name="isbn"><br><br>

        <label for="categories">categories:</label><br>
        <input type="text" id="categories" name="categories"><br><br>

        <label for="auteurs">auteurs:</label><br>
        <input type="text" id="auteurs" name="auteurs"><br><br>

        <form action="index.php" method="POST" enctype="multipart/form-data">
        <label for="image">Image</label>
        <input type="image" name="image">
       
        </form>

        <label for="nombre_de_page">nombre de page:</label><br>
        <input type="text" id="nombre_de_page" name="nombre_de_page"><br><br>

        <label for="Description">Description:</label><br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>




       <br>
        <input type="submit" value="Ajouter"><br>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>