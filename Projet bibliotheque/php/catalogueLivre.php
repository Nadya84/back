
<?php
$user = 'root';
$pass = '';
try {
    $db = new PDO('mysql:host=localhost;dbname=mediatheque', $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $resultats = $db->query('SELECT * FROM livres')->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    print "Erreur :" . $e->getMessage() . "<br/>";
    die;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des livres</title>
   <style>
    .tablivre{
        border: 5 solid blue;
    }
   </style>
</head>
<body>
    <h2>Liste des livres</h2>
    <table  class="tablivre", border="1">
        <tr>
        <th>titre</th>
        <th>isbn</th>
        <th>nombre-de-page</th>
        <th>date-de-parution</th>  
        <th>image</th>  
        <th>shortDescription</th>  
        <th>longDescription</th>    
        <th>status</th>
        <th>auteurs</th>    
        <th>categories</th>
        <th>Statut</th>

        </tr>
        <?php foreach ($resultats as $row) { ?>
        <tr>
            <td><?php echo $row['titre']; ?></td>
            <td><?php echo $row['isbn']; ?></td>
            <td><?php echo $row['nombre-de-page']; ?></td>
            <td><?php echo $row['date-de-parution']; ?></td>
            <td><?php echo $row['image']; ?></td>
            <td><?php echo $row['shortDescription']; ?></td>
            <td><?php echo $row['longDescription']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['auteurs']; ?></td>
            <td><?php echo $row['categories']; ?></td>
            <td><?php echo $row['Statut']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>