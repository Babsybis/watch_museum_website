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
try {
    $conn = new PDO("mysql:host=".SERVER.";dbname=".DATABASE, USERNAME, PASSWORD);
    //je me connecte à ma database

    $conn->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
          //doit retourner erreur ou pas

    $sth = $conn->prepare("DELETE FROM register_newsletter WHERE id=:id");
    //prepare la commande sql
    $sth -> bindParam(":id", $_POST['delete'], PDO::PARAM_INT);
    //definition de la variable
    $sth -> execute(["id" => $_POST['delete']]);
    //execute la commande sql

} catch(PDOException $e) {
    echo "Connection failed: "  
        . $e->getMessage();
        //gestion des erreurs 
}
?>