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

    $stmt = $pdo->prepare("UPDADE voyage
    SET (:NomVoyage, :DateDepart, :DateArriver, :PrixVoyage, :Description)
    WHERE idVoyage = :idVoyage");

$return = $stmt->execute([
    ':NomVoyage' => $nom,
    ':DateDepart' => $DateDepart,
    ':DateArriver' => $DateArriver,
    ':PrixVoyage' => $prix,
    ':Description' => $Description
]);

    header('Location: Admin.php');
    exit();
}
    
?>