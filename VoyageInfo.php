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


$sqlQuery = "SELECT * FROM voyage";
//Préparation de la requête par PDO
$statment = $mysqlConnection->prepare($sqlQuery);
//Execution de la requête
if ($statment->execute()) {
  //le resultat est retourné sous forme de tableau
  $voyages = $statment->fetchAll();
}


?>

<!Doctype html>
<html>

    <head>

    </head>


    <body>
        
    <table>

        <tr>
            <th>Nom Voyage</th>
            <th>ligne1 colonne2</th>
            <th>ligne1 colonne3</th>
            <th>ligne1 colonne4</th>
        </tr>

        <? foreach($voyages as $unVoyage){ ?>
        <tr>
            <td><?=$unVoyage["NomVoyage"]?></td>
            <td>ligne2 colonne2</td>
            <td>ligne2 colonne3</td>
            <td>ligne2 colonne4</td>
        </tr>    
        <? } ?>
        
    </table>


    </body>

</html>