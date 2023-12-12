
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
<tr><td class="labels">Emprunteur</td><td><input type="text" name="name" placeholder="Entrer le nom de l'emprunteur du livre" size="25" class="fields" required="required" value=''/></td></tr>
<tr><td class="labels">Date d'emprunt: </td><td><input type="text" name="auth" placeholder="date emprunt" size="25" class="fields" required="required"  /></td></tr>
<tr><td class="labels">Date de retour: </td><td><input type="text" name="auth" placeholder="date retour" size="25" class="fields" required="required"  /></td></tr>
<tr><td class="labels">Livre: </td><td><input type="text" name="auth" placeholder="nom du livre" size="25" class="fields" required="required"  /></td></tr>
<tr>
<td class="labels">Situation livre</td>
<td>
<select name='situationLivre'>
		
		<option value='Open source' >Rendu</option>
		<option value='Java' >Supendre</option>
	
		</select>    </td>
	</tr>
  <br>
</table>
</form>
 <br><br><br><br><br><br>
 <button data-label="Register" class="rainbow-hover">
  <a href="home.php"><span class="sp">Retour</span></a>
  </button>
<footer>
    <p>Copyright © 2023 DWWM</p>
  </footer>
</body>
</html>