<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: /watch_museum_website/login/login.php");
    exit;
};
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Document</title>
</head>

<body>
    <div class="popup">
        <div class="confirm">
            <p>Voulez vous vraiment supprimer cette donnée?</p>
            <div class="btns">
                <button type="btn" class="oui">Oui</button>
                <button type="btn" class="non">Non</button>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- **********HEADER************ -->
        <div class="header">
            <div class="left">
                <div class="left_media">
                    <p class="logo"><span>m</span>usée</p>
                    <a href="logout.php"><img class="sortie2" src="/watch_museum_website/images/logout.webp" alt="Bouton sortie"></a>
                </div>
        <!-- **********BARRE DE RECHERCHE********** -->
                <input type="text" class="search" placeholder="recherche mail">
            </div>

            <div class="right">
                <a class="btn" href="csv.php">Export CSV</a>
                <a href="logout.php"><img class="sortie" src="/watch_museum_website/images/logout.webp" alt="Bouton sortie"></a>
            </div>
        </div>

        <!-- ***********TABLEAU********** -->
        <table>
            <thead>
                <tr class="first">
                    <th>MAIL &nbsp; <img src="../images/haut.webp" alt="" width="15px"></th> 
                    <th>DATE</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>

            </tbody>

        </table>

        <template id="productrow">
            <tr>
                <td></td>
                <td></td>
                <td><img class="delete" src="/watch_museum_website/images/delete.webp" alt="Poubelle"></a></td>
            </tr>
        </template>


        <!-- **********FOOTER********** -->
        <div class="footer">
            <button class="btn btn_footer">Voir plus</button>
            <div class="title">
                <p>Dashboard</p>
                <p>Newsletter website</p>
            </div>
            <p class="counts"><span class="cpt">0</span> sur <span class="cpt_total">0</span></p>
          
        </div>
    </div>
</body>

</html>