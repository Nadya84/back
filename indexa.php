<?php
/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:dbname=pays;host=127.0.0.1';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);

$sql =  'SELECT * FROM t_pays ORDER BY libelle_pays';
$sqlcontinent='SELECT * FROM t_continents ORDER BY libelle_continent';

if (isset($_GET["listContinent"])&&$_GET["listContinent"]) {
	$sqlregion='SELECT * FROM t_regions WHERE continent_id='.$_GET["listContinent"].' ORDER BY libelle_region';
} else {
	$sqlregion='SELECT * FROM t_regions ORDER BY libelle_region';
}
if (isset($_GET["listContinent"])&&$_GET["listContinent"]) {
	$sql='SELECT * FROM t_pays WHERE continent_id='.$_GET["listContinent"].' ORDER BY libelle_pays';
} else {
	$sql =  'SELECT * FROM t_pays ORDER BY libelle_pays';
}

if (isset($_GET["listContinent"])&&$_GET["listContinent"]) {                  

	$sql = "SELECT  libelle_region AS 'libelle', AVG(population_pays) AS 'population_pays', AVG(taux_natalite_pays) AS 'taux_natalite_pays', AVG(taux_mortalite_pays) AS 'taux_mortalite_pays', 
	AVG(esperance_vie_pays) AS 'esperance_vie_pays', AVG(taux_mortalite_infantile_pays) AS 'taux_mortalite_infantile_pays', AVG(nombre_enfants_par_femme_pays) AS 'nombre_enfants_par_femme_pays', AVG(taux_croissance_pays) AS 'taux_croissance_pays', 
	AVG(population_plus_65_pays) AS 'population_plus_65_pays' 
	FROM t_continents INNER JOIN t_regions ON(t_continents.id_continent=t_regions.continent_id) 
	INNER JOIN t_pays ON(t_regions.id_region=t_pays.region_id) 
	WHERE t_pays.continent_id=".$_GET["listContinent"]." GROUP BY libelle_region ORDER BY libelle_continent";
} else {
	$sql =  "SELECT libelle_pays AS 'libelle', population_pays, taux_natalite_pays, taux_mortalite_pays, taux_mortalite_infantile_pays, esperance_vie_pays, nombre_enfants_par_femme_pays, taux_croissance_pays, population_plus_65_pays  
	FROM t_pays ORDER BY libelle_pays";  
}
 
if (isset($_GET["listRegion"])&&$_GET["listRegion"]) {

    $sql = "SELECT libelle_region AS 'libelle', AVG(population_pays) AS 'population_pays', AVG(taux_natalite_pays) AS 'taux_natalite_pays', AVG(taux_mortalite_pays) AS 'taux_mortalite_pays',
    AVG(esperance_vie_pays) AS 'esperance_vie_pays', AVG(taux_mortalite_infantile_pays) AS 'taux_mortalite_infantile_pays', AVG(nombre_enfants_par_femme_pays) AS 'nombre_enfants_par_femme_pays', AVG(taux_croissance_pays) AS 'taux_croissance_pays',
    AVG(population_plus_65_pays) AS 'population_plus_65_pays'
     FROM t_pays INNER JOIN t_regions ON(t_pays.region_id=t_regions.id_region)
     WHERE t_pays.region_id=".$_GET["listRegion"]." GROUP BY libelle_pays ORDER BY libelle_region";
	
} else{
    $sql = "SELECT libelle_pays AS 'libelle', population_pays, taux_natalite_pays, taux_mortalite_pays, taux_mortalite_infantile_pays, esperance_vie_pays, nombre_enfants_par_femme_pays, taux_croissance_pays, population_plus_65_pays  
    FROM t_pays ORDER BY libelle_pays";  
}

?>

<!DOCTYPE html> 
<html lang="fr"> 
    <head>
        <meta charset="utf-8">
        <title>Liste des pays</title>
		<style>
			table{
				background-color: #ffffff;
			}
      table,
      th,
      td {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
      }
	 
	  table thead{ 
        border-collapse: collapse;
        width: 50%;
		
	  }
	  html{
		padding-left: 20%;
		padding-right: 20%;
		background-color: #f5f5f5;

	  }
	  h6{
		font-size: large;
	
	  }
	 
	  form {
		background-color: #edeeef;
		padding: 7px;
		border-radius: 7px;
		padding: 5px;
		padding-bottom: 50px;
	  }
    </style>

    </head>
    <body>
        <h6>Tous les pays du monde</h6>
       
        <form>
            <p> Par continent</p>
          <select name="listContinent"> 
           <option value="">MONDE</option>
           <?php foreach($dbh->query($sqlcontinent) as $row) { ?>
				<option value="<?php print $row["id_continent"];?>"><?php print $row["libelle_continent"];?></option>
			<?php } ?>
         </select>
            <p> Par région</p>
            <select name="listRegion"> 
			<option value="">--</option>
			<?php foreach($dbh->query($sqlregion) as $row) {?>
			<option value="<?php print $row["id_region"];?>"><?php print $row["libelle_region"];?></option>
			<?php } ?> 

         </select> <br><br><br><br>
		 <button type="submit">Filtrer</button>
			</form>

		<table >
			<thead>
				<th>Pays</th>
				<th>Population totale (en milliers) </th>
				<th>Taux de natalité</th>
                <th>Taux de mortalité</th>
                <th>Espérance de vie</th>
                <th>Taux de mortalité infantile</th>
                <th>Nombre d_enfant(s) par femme</th>
                <th>Taux de croissance</th>
                <th>Population de 65 ans et plus(en milliers)</th>
			</thead>
			<tbody>	
		
				<?php foreach  ($dbh->query($sql) as $row) { ?>
				<tr>
					<td><?php print $row['libelle'];?>
					</td>
					<td><?php print $row['population_pays'];?>
					</td>
					<td><?php print $row['taux_natalite_pays'];?>
					</td>
					<td><?php print $row['taux_mortalite_pays'];?>
					</td>
					<td><?php print $row['taux_mortalite_infantile_pays'];?>
					</td>
					<td><?php print $row['esperance_vie_pays'];?>
					</td>
					<td><?php print $row['nombre_enfants_par_femme_pays'];?>
					</td>
					<td><?php print $row['taux_croissance_pays'];?>
					</td>
					<td><?php print $row['population_plus_65_pays'];?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
			</table>
	</body>
</html>