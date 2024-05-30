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


if (isset($_POST['modif'])) {
    $Voyage = $V['idVoyage'];
    

	$stmt = $pdo->prepare("SELECT * FROM voyage
    WHERE idVoyage = :idVoyage");

	$return = $stmt->execute([
    	':idVoyage' => $Voyage
	]);

    header('Location: Admin.php');
    exit();
}

?>