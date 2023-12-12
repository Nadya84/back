
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Application de Gestion de Bibliothèque</title>
	<link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/styleHome.css">
	
</head>
<body>
<nav class="navbar" sticky-top>
  
     <a href="#" class="logo">Application de Gestion de Bibliothèque</a> 
	<div class="nav-links">
		<ul>
			<li> <a href="#"> Home</a></li>
			<li> <a href="#">Se déconnecte</a></li>
		</ul> 
	</div>
		   <form>
              <input class="form-control me-2" type="search" placeholder="rechercher" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Rechercher</button>
			</form>
		
</nav>

 <div class="bienvenue">
          <table border="0" class="table" cellpadding="10" cellspacing="20" width=500px>
          <tr><th colspan=6 ><h3 class='SubHead'><u>Gestion des livres:</u></h3></th></tr>
          <tr><td><a href="catalogueLivre.php" class="Command">Catalogue des livres</a></td>
          <td><a href="AjouterLivre.php" class="Command">Ajouter un livre</a></td></tr>
          <tr><td><a href="SupprimerLivre.php" class="Command">Supprimer un livre </a></td>
          <td><a href="ficheDescriptiveLivre.php" class="Command">Fiche descriptive des livres</a></td></tr>
         </table>
 

        <br />
        <br />
        <table border="0" class="table" cellpadding="10" cellspacing="10" width=500px >
        <tr><th colspan=6><h3 class='SubHead'><u>Gestion des demandes:</u></h3></th></tr>

        <td><a href="demandeEmpruntLivre.php" class="Command">Demandes d'emprunts</a></td>
        <td><a href="pretLivre.php" class="Command">Gestion des prêts</a></td></tr>

        </table>

       <br />
       <br />
       <table border="0" class="table" cellpadding="10" cellspacing="10" width=500px >
       <tr><th colspan=6><h3 class='SubHead'><u>Profil:</u></h3></th></tr>
       <tr><td><a href="logout.php" class="Command">S'identifier</a></td>

       <td><a href="inscriptionUtilisateur.php" class="Command">S'inscrire</a></td></tr>
      </table>
      <br />
       <br />
 </div>

  <footer>
    <p>Copyright © 2023 DWWM</p>
    </footer>
</body>
</html>

