<?
$hostname = "localhost";
$user = "root";
$pwd = "";
$database = "vosreves";

try
{
  $mysqlConnection = new PDO('mysql:host=' . $hostname . ';dbname=' . $database,$user, $pwd);
  //echo "Connexion réussie<br/>";
} catch (PDOException $error) {
  echo 'Échec de la connexion : ' . $error->getMessage();
}

$query = "SELECT * FROM voyage WHERE idVoyage > 0";


// Filtre par destination
if (isset($_POST['Destination'])) {
    $destination = $_POST['Destination'];
    $query .= " AND nomVoyage like '%$destination%'";
}

// Filtre par date de départ
if (!empty($_POST['date_depart'])) {
    $date_depart = $_POST['date_depart'];
    $query .= " AND date_depart >= '$date_depart'";
}

// Filtre par date de fin
if (!empty($_POST['date_fin'])) {
    $date_fin = $_POST['date_fin'];
    $query .= " AND date_fin <= '$date_fin'";
}

// Filtre par prix
if (!empty($_POST['prix'])) {
    $prix = $_POST['prix'];
    $query .= " AND prix <= $prix";
}

//Préparation de la requête par PDO
$statment = $mysqlConnection->prepare($query);
//Execution de la requête
if ($statment->execute()) {
  //le resultat est retourné sous forme de tableau
  $voyages = $statment->fetchAll();
  // Affichage des résultats
if (true) {
    while ($row = $statment->fetchAll()) {
        echo "Destination: " . $row["Destination"] . "<br>";
        echo "Date de départ: " . $row["date_depart"] . "<br>";
        echo "Date de fin: " . $row["date_fin"] . "<br>";
        echo "Prix: " . $row["prix"] . "<br>";
        echo "<br>";
    }
} else {
    echo "Aucun résultat trouvé.";
}

}


$mysqlConnection=null;

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <title>Accueil Vos Rêves</title>
        <link rel="stylesheet" href="Accueil.css">
    </head>

    
    <body>
        
    <marquee scrollamount="10"> Vos Rêves </marquee>
        
        <script src="https://kit.fontawesome.com/1d6e320281.js" crossorigin="anonymous"></script>

        <div class="logo">
            <img src="Logo.png" alt="fffffffff">
        </div>

        <!-- Bouton connection Inscription -->
        <div class="bouton">

            <div class="BoutonInscrire">
                <a href="Sinscrire.php"><i class="fa-solid fa-user"></i>S'inscrire</a>
            </div>

            <div class="BoutonConnecter">
                <a href="SeConnecter.php"><i class="fa-solid fa-user"></i> Se connecter</a>
            </div>

        </div>


        <!-- Diapo Image -->
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="img/BoraBora.jpg" style="width: 650px;">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <img src="img/760935.jpg" style="width: 650px">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <img src="img/istockphoto-1128682811-170667a.jpg" style="width: 650px">
                <div class="text"></div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>

        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
}
        </script>



        <!-- Barre de recherche -->
        <form action="Accueil.php" method="POST">
            <div class="SearchTravel">

                <h1>Chercher le voyage de vos Rêves</h1>

                <div class="Destination">
                    <input name="Destination" type="text" placeholder="Destination" style="height:30px;" value="" required>
                </div>
                
                <div class="Search2">
                    <button type="submit" style="height:30px;">Recherche<i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </form>



        <div class="Offre">

                <table class="t1">

                    <caption>Info utilisateurs</caption>

                    <tr>
                        <th>Nom Voyage</th>
                        <th>Date Départ</th>
                        <th>Date Arrivée</th>
                        <th>Prix Voyage</th>
                        <th>Description</th>
                    </tr>
                
                    <? foreach($voyages as $unVoyage){ ?>
                        <tr>
                            <th><?=utf8_encode($unVoyage["NomVoyage"])  ?></th>
                            <th><?=$unVoyage["DateDepart"] ?></th>
                            <th><?=$unVoyage["DateArriver"]?></th>
                            <th><?=$unVoyage["PrixVoyage"]?></th>
                            <th><?=utf8_encode($unVoyage["Description"]) ?></th>
                        </tr>    
                    <? } ?>
                </table>
        </div>    

        

        <footer>

                <div class="footer">

                    <div class="CGV">
                        <a href="CGV.html">Conditions générales de vente</a>
                    </div>
                

                    <div class="MentionsLégales">
                        <a href="MentionsLégales.html">Mentions Légales</a>
                    </div>

                    <div class="PolitiqueConf">
                        <a href="PolitiqueConf.html">Politique de confidentialité</a>
                    </div>

                </div>


        </footer>

    </body>

    
    


</html>