<?php
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

if (isset($_POST['nom'])) {
    
    $nom = $_POST['nom'];
    $DateDepart = $_POST['DateDepart'];
    $DateArriver = $_POST['DateArriver'];
    $prix = $_POST['prix'];
    $Description = $_POST['Description'];

    $stmt = $pdo->prepare("INSERT INTO voyage (NomVoyage, DateDepart, DateArriver, PrixVoyage, Description)
    VALUES (:NomVoyage, :DateDepart, :DateArriver, :PrixVoyage, :Description)");

$return = $stmt->execute([
    ':NomVoyage' => $nom,
    ':DateDepart' => $DateDepart,
    ':DateArriver' => $DateArriver,
    ':PrixVoyage' => $prix,
    ':Description' => $Description
]);

$_SESSION["nom"] = $nom;
    header('Location: Admin.php');
    exit();
}
    
?>