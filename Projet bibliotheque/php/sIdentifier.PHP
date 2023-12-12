

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

<span class="SubHead">S'identifier</span>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="4" cellspacing="4" class="table">
<tr><td colspan="2" align="center" class="msg"></td></tr>
<tr><td class="labels">Mon identifiant: </td><td><input type="text" name="name" class="fields" placeholder="Entrer votre identifiant" required="required" size="25" /></td></tr>
<tr><td class="labels">Mot de passe : </td><td><input type="email" name="email" class="fields" placeholder="Entrer votre mot de passe" required="required" size="25" /></td></tr>
</table>
</form><br />



<div>
    <button class="btnV"><i class="animation"></i>Valider<i class="animation"></i>
    </button>
</div>

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