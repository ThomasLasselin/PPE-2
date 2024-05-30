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


if (isset($_POST['idVoyage'])) {
    $Voyage = $_POST['idVoyage'];
    $stmt = $pdo->prepare("DELETE FROM voyage
    WHERE idVoyage = :idVoyage");

    $return = $stmt->execute([
        ':idVoyage' => $Voyage

    ]);

   header('Location: Admin.php');
   exit();
}

?>