

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Application de Gestion de Bibliothèque</title>
<link href="../css/style.css" rel="stylesheet" >
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












<div id="banner">
<span class="head">Application de Gestion de Bibliothèque</span><br />
</div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Inscription Utilisateur</span>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="4" cellspacing="4" class="table">
<tr><td colspan="2" align="center" class="msg"></td></tr>
<tr><td class="labels">Nom et Prénom: </td><td><input type="text" name="name" class="fields" placeholder="Entrer nom complet" required="required" size="25" /></td></tr>
<tr><td class="labels">Email ID : </td><td><input type="email" name="email" class="fields" placeholder="Entrer votre Email " required="required" size="25" /></td></tr>
<tr><td class="labels">Téléphone : </td><td><input type="email" name="téléphone" class="fields" placeholder="Téléphone " required="required" size="25" /></td></tr>
<tr><td class="labels">Adresse : </td><td><input type="email" name="adresse" class="fields" placeholder="Adresse" required="required" size="25" /></td></tr>
<tr><td class="labels">Commune : </td><td><input type="email" name="commune" class="fields" placeholder="Commune " required="required" size="25" /></td></tr>
<tr><td class="labels">Code postal : </td><td><input type="email" name="code postal" class="fields" placeholder="Code postal" required="required" size="25" /></td></tr>



<tr><td class="labels">Que voulez-vous: </td>
<td>
<select name="branch" class="fields" required>
<option value="" disabled="disabled" selected="selected">- - Selectionnez votre carte - -</option>
<option style="color:black" value="Génie Appliqué">Carte individuelle</option>
<option style="color:black" value="Génie Informatique">Carte familiale</option>

</select>
</table>

</form><br />

<button class="btnE">Enregistrer</button>
<br /><br /><br /><br /><br /><br /><br /><br />
<button data-label="Register" class="rainbow-hover">
  <a href="home.php"><span class="sp">Retour</span></a>
  </button>
<br />
<br />

</div>
</div>
<footer>
    <p>Copyright © 2023 DWWM</p>
  </footer>
</body>
</html>