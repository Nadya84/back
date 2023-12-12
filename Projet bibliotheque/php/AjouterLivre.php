
<?php
// Vérifie si des données ont été soumises via le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs saisies dans le formulaire
    $titre = $_POST['name'];
    $isbn = $_POST['num'];
    $auteur = $_POST['auth']; // Remarque : les champs "auteur" ont le même nom
    $nb_pages = $_POST['nb']; // Remarque : les champs "nb_pages" ont le même nom
    $categorie = $_POST['categorie'];
    $description = $_POST['desc'];

    // Connexion à la base de données
    $serveur = "localhost"; // Adresse du serveur MySQL
    $utilisateur = "root"; // Nom d'utilisateur MySQL
    $motDePasse = ""; // Mot de passe MySQL
    $nomBaseDeDonnees = "mediatheque"; // Nom de la base de données

    // Connexion à la base de données
    $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("La connexion a échoué : " . $connexion->connect_error);
    }

    // Requête SQL pour insérer les données dans la table 'livre'
    $requete = "INSERT INTO livres (titre, isbn, auteur, nb_pages, categorie, description) 
                VALUES ('$titre', '$isbn', '$auteur', '$nb_pages', '$categorie', '$description')";

    // Exécution de la requête
    if ($connexion->query($requete) === TRUE) {
        echo "Livre ajouté avec succès à la base de données.";
    } else {
        echo "Erreur lors de l'ajout du livre : " . $connexion->error;
    }

    // Fermer la connexion à la base de données
    $connexion->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Application de Gestion de Bibliothèque</title>
    <link rel="stylesheet" href="../css/style.css">
	
</head>
<body>

<nav class="navbar" sticky-top>
  
     <a href="#" class="logo">Application de Gestion de Bibliothèque</a> 
	<div class="nav-links">
		<ul>
			<li> <a href="home.php"> Home</a></li>
			<li> <a href="#">Se déconnecte</a></li>
		</ul> 
	</div>
		   <form>
              <input class="form-control me-2" type="search" placeholder="rechercher" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Rechercher</button>
			</form>
		
</nav> <br><br>


		<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">AJOUTER DES LIVRES</span>
<br />
<br />
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" enctype="multipart/form-data"> 
<table border="0" class="tableAjout" cellpadding="10" cellspacing="10">
<tr><td class="msg" align="center" colspan="2"></td></tr>
  </td></tr> 
<tr><td class="labels">Titre</td><td><input type="text" name="name" placeholder="Entrer le nom de livre" size="25" class="fields" required="required" value=''/></td></tr>
<tr><td class="labels">ISBN: </td><td><input type="text" name="num" placeholder="ISBN" size="25" class="fields" required="required"  /></td></tr>
<tr><td class="labels">Auteur: </td><td><input type="text" name="auth" placeholder="Auteur" size="25" class="fields" required="required"  /></td></tr>
<tr><td class="labels">nb pages: </td><td><input type="text" name="nb" placeholder="Nb de pages" size="25" class="fields" required="required"  /></td></tr>
<tr>
<td class="labels">Categorie</td>
<td>
<select name='categorie'>
		
		<option value='Open source' >Open source</option>
		<option value='Java' >Java</option>
		<option value='Next Generation Databases'  >Next Generation Databases</option>
		<option value='Software Engineering'  >Software Engineering</option>
		<option value='Internet'  >Internet</option>
		<option value='Web development'  >Web development</option>
		<option value='Miscellaneous'  >Miscellaneous</option>
		</select>    </td>
	</tr>
<tr><td class="labels"> Image: </td><td><input type="file" name="photo" placeholder="enter une photo:" size="25" class="fields" required="required"  /></td></tr>
 <tr class="SubHead" style="text-decoration:underline;"> <th class="labels" rowspan=2
 
 span=2 rowspan=5>Description</th> 
 <td colspan=4> <textarea name='desc'  rows=10 cols=90> description ou bien résume...</textarea> </td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Ajouter" class="fields" /></td></tr>
</table>
</form>


   <a href="home.php" class="link">Retour</a>

   <footer>
    <p>Copyright © 2023 DWWM</p>
  </footer>
</body>
</html>