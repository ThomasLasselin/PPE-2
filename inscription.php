<?
$hostname = "localhost";
$user = "root";
$pwd = "";
$database = "vosreves";
$connexion = mysqli_connect($hostname, $user, $pwd, $database);



// Vérifier si des données ont été soumises via le formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs des champs du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateNaissance = $_POST['date_naissance'];
    $email = $_POST['email'];
    $motDePasse = $_POST['mot_de_passe'];
    
    
    // Exemple : afficher un message de succès
    // echo "Inscription réussie !";
}
?>