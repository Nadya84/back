
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
 
</nav>


<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">GESTION DES PRETS</span>
<br />
<br />
<form method="post" action="" enctype="multipart/form-data">
<table border="0" class="tableAjout" cellpadding="10" cellspacing="10">
<tr><td class="msg" align="center" colspan="2"></td></tr>
  </td></tr> 
<tr><td class="labels">Titre</td><td><input type="text" name="name" placeholder="Entrer le nom du livre" size="25" class="fields" required="required" value=''/></td></tr>
<tr><td class="labels">ISBN: </td><td><input type="text" name="auth" placeholder="ISBN" size="25" class="fields" required="required"  /></td></tr>
	</tr>
  <br>
  <tr><td colspan="2" align="center"><input type="submit" value="Supprimer" class="fields" /></td></tr>
</table>
</form>
<br />
<br />


<button data-label="Register" class="rainbow-hover">
  <a href="home.php"><span class="sp">Retour</span></a>
  </button>
<br />
<br />
<footer>
    <p>Copyright © 2023 DWWM</p>
  </footer>
 </body>
</html>