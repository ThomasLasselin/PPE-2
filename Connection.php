<?
$hostname = "localhost";
$user = "root";
$pwd = "";
$database = "vosreves";



// Vérifier si des données ont été soumises via le formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs des champs du formulaire
    $email = $_POST['email'];
    $motDePasse = $_POST['mot_de_passe'];
    
    // Exemple : afficher un message de succès
    echo "Connexion réussie !";
}


// Connection en Admin

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["mot_de_passe"];

    // Vérifier les informations d'identification
    if ($email == "admin@gmail.com" && $password == "admin") {
        // Redirection vers la page souhaitée
        header("Location: Admin.php");
        exit(); // Assurez-vous de terminer le script après la redirection
    } else {
        // Afficher un message d'erreur si les informations d'identification sont incorrectes
        echo "Identifiants incorrects.";
    }
}

?>