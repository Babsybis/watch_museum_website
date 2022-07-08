<?php
session_start();
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../admin/');
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
  

    $sth = $conn->prepare("SELECT user_name, password FROM admins");
    //prepare la commande sql
    $sth->execute();
    //execute la commande sql
    $info = $sth->fetchAll();
    //recupere le resultat

} catch(PDOException $e) {
}

if (isset($_POST["name"]) and isset($_POST["password"])){
  foreach ($info as $u){
    if (($_POST['name'] == $u['user_name']) and ($_POST['password'] == $u['password'])){
      $_SESSION['login'] = $u['user_name'];
      header("Location: /watch_museum_website/admin");
    }
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="contain">
        <div class="title">
            <p>Sign in</p></div>
            <!-- **********ROUAGE UNIQUEMENT DESKTOP********** -->
            <img class="roue"src="/watch_museum_website/images/roue.webp" alt="Roue engrenage" width="" height="" id="une">
            <img class="roue"src="/watch_museum_website/images/roue.webp" alt="Roue engrenage" width="" height="" id="deux">
            <img class="roue"src="/watch_museum_website/images/roue2.webp" alt="Roue engrenage" width="" height="" id="trois"> 

            <form action="" method="post" class="right" novalidate>
                <div class="user">
                  <label for="name">User </label>
                  <input type="text" name="name" id="name" required>
                </div>
                <div class="password">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="password" minlength="8" required>
                </div>
                <div class="btn">
                  <input type="submit" value="SUBMIT">
                </div>
               
              </form>
        
    </div>
    
</body>
</html>