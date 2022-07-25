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
$entries = $_POST["entries"]."%";
// $entries = "%".$_POST["entries"]."%";


try {
    $conn = new PDO("mysql:host=".SERVER.";dbname=".DATABASE, USERNAME, PASSWORD);
    //je me connecte à ma database

    $conn->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
          //doit retourner erreur ou pas
    $conn->setAttribute(PDO::ATTR_AUTOCOMMIT,FALSE);
  

    $sth = $conn->prepare("SELECT * FROM register_newsletter WHERE Mail LIKE :research");
    //Creer une valeur à rechercher
    $sth -> bindParam(":research", $entries);
    //prepare la commande sql
    $sth->execute();
    //execute la commande sql
    $emails = $sth->fetchAll(PDO::FETCH_ASSOC);
    //recupere le resultat

    echo json_encode($emails);

} catch(PDOException $e) {
    echo "Connection failed: "
        . $e->getMessage();
        //gestion des erreurs 
}

?>