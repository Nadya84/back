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
 
</nav> <br><br><br><br><br>

<div id="biblio">
<h4>Pour accéder au service de prêt de livres numériques</h4>
<p>Biblio TNN est un service du Système de Lecture Publique qui permet d'emprunter du contenu numérique à tous les utilisateurs disposant d'une carte des bibliothèques publiques catalanes. <br>Biblio TNN offre aux utilisateurs des bibliothèques une collection de plus de 300 livres électroniques de genre informatique dans différentes langues, tant pour les adultes que pour les enfants et les jeunes. <br>Avec la carte membre, vous pouvez avoir un total de 4 documents en prêt numérique pendant 21 jours. Dans le cas des journaux et magazines, cette durée peut être réduite.</p>
</div>

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Demander des livres</span>
<br />
<br />
<form method="post" action="">
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr><td class="msg" align="center" colspan="2"></td></tr> 
<tr><td class="labels">livre : </td><td><input type="text" size="25" class="fields" required="required" name="name" placeholder="Entrer le nom de livre" /></td></tr>
<tr><td class="labels">Auteur : </td><td><input type="text" size="25" class="fields" required="required" name="author" placeholder="Enter le nom de l'auteur" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" class="fields" value="Demander" /></td></tr>
</table>
</form>

<br />
<br />






<button data-label="Register" class="rainbow-hover">
  <a href="home.php"><span class="sp">Retour</span></a>
  </button>

 <footer>
    <p>Copyright © 2023 DWWM</p>
  </footer>
 </body>
</html>