
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="styleSheet" href="bootstrap/css/bootstrap.css">
 <link rel="styleSheet" href="bootstrap/css/bootstrap.css">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="style.css" rel="stylesheet" type="text/css">
  <script src="jquery/jquery-3.3.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<h2> Affichage des informations d'une personne</h2>
	</div>
<?php

include("config.php");
try {
	$dbconn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}",$databaseUsername,$databasePassword);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//Settings errors mode Exception
    $sql="SELECT * FROM personne";
	$result = $dbconn->query($sql);
	if ($result->rowCount() > 0) {
        echo " <div class='container'> <table class='table table-hover'>
        <tr>
			<th>ID</th>
			<th>Nom</th>
            <th>Prenom</th>
			<th>age</th>
            <th>Sexe</th>
            <th colspan='2'>Operations De mise à jour</th>
        </tr>";
		while($row = $result->fetch()) {
            $Id=$row["id"];
       echo "<tr>
        <td><a href='details.php?id=$Id'>".$row["id"]."</a></td>
        <td>".$row["nom"]."</td>
		<td>".$row["prenom"]."</td>
		<td>".$row["age"]."</td>
        <td>".$row["sexe"]."</td>
       
        <td><a href='modifier.php?id=$Id'>"."Modifier"."</a></td>
        <td><a href='supprimer.php?id=$Id'>"."Supprimer"."</a></td></tr>";
    }
    
	}
	

}catch(PDOException $e){
echo "Connection failed: " . $e->getMessage();
}
 echo "</table> </div>";
  ?>
<a href='ajout.php'>ajouter une personne</a>
</body>
</html>