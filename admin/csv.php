<?php
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
// chargement du '.env'

define('SERVER',$_ENV["HOST"]);
define('DATABASE',$_ENV["BDD"]);
define('USERNAME',$_ENV["USER"]);
define('PASSWORD', $_ENV["PASSWORD"]);
//variables environement
$conn = "";
//initialisation variable

try {
    $conn = new PDO("mysql:host=".SERVER.";dbname=".DATABASE, USERNAME, PASSWORD);
    //je me connecte à ma database

    $conn->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
          //doit retourner erreur ou pas
    $conn->setAttribute(PDO::ATTR_AUTOCOMMIT,FALSE);
  

    $sth = $conn->prepare("SELECT * FROM register_newsletter");
    //prepare la commande sql
    $sth->execute();
    //execute la commande sql et evite les doublons dans le fichiers csv
    $emails = $sth->fetchAll(PDO::FETCH_ASSOC);
    //recupere le resultat

} catch(PDOException $e) {
    echo "Connection failed: "
        . $e->getMessage();
        //gestion des erreurs 
}

//Ouvrir un fichier en mode écriture ('w')
$fp = fopen('php://output', 'w');

//Boucle à travers le pointeur de fichier et une ligne
foreach ( $emails as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="filename.csv"');
 exit();

?>