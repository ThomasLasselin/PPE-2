<?
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vosreves";

try {
    $pdo = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo $error;
}

$stmt = $pdo->prepare("select * from  voyage order by idVoyage");
if ($stmt->execute()) {
	$voyage = $stmt->fetchAll();
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Espace administratif</title>
	<link rel="stylesheet" href="Admin.css">
	<meta charset="utf-8" />
</head>

<body>

	<div class="logo">
		<img src="Logo.png" alt="espace logo">
	</div><br><br>

	<h1 id="GrandTitre">Espace Administrateur</h1>

	<div class="cadre">
		<div class="ajouter">
			<form method="post" action="Ajouter.php">
				<label for="nom">Nom :</label>
				<input type="text" id="nom" name="nom" required>
				<label for="DateDepart">Date de départ :</label>
				<input type="date" id="DateDepart" name="DateDepart" required></select>
				<label for="DateArriver">Date d'arrivée :</label>
				<input type="date" id="DateArriver" name="DateArriver" required></select>
				<label for="prix">Prix :</label>
				<input type="text" id="prix" name="prix" required>
				<label for="Description">Description :</label>
				<input type="text" id="Description" name="Description" required>
				<input type="submit" value="Créer" />
			</form>
		</div>

		<div classe="suppr">

			<form method="POST" action="supprimer.php">
				<label for="Voyage">Voyage :</label>
                    <select name="idVoyage" type="text" placeholder="Voyage" style="height:36px;" value="" required>
					<? foreach ($voyage as $V) { ?>
							<option value=<?= $V["idVoyage"]?>><?= utf8_encode($V["NomVoyage"])  ?>, Date du départ : <?= $V["DateDepart"] ?>, 
							Date d'arrivée :<?= $V["DateArriver"] ?>, Prix : <?= $V["PrixVoyage"] ?>, Description : <?= utf8_encode($V["Description"])  ?></option>
					<? } ?>                    
                    </select>
					<input type="submit" value="Supprimer" />
			</form>
		</div>
</body>

</html>