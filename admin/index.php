<?php 
session_start();
if (!isset($_SESSION["login"])){
    header("location: /watch_museum_website/login/login.php");
    exit;
};
?>
<!DOCTYPE html>
<html lang="en">
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
            <p class="logo"><span>m</span>usée</p>
            <div class="right">
            <a class="btn" href="csv.php">Export CSV</a>
            <a href="logout.php"><img class="sortie"src="/watch_museum_website/images/logout.webp"alt="Bouton sortie"></a>
            </div>
        </div>
        <!-- ***********TABLEAU********** -->
        <table>
	<thead>
		<tr class="first">
			<th>MAIL</th>
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
            <td><img class="delete" src="/watch_museum_website/images/delete.webp" alt="Poubelle" ></a></td>
        </tr>
        </template>
  

    <!-- **********FOOTER********** -->
    <div class="footer">
        <button class="btn btn_footer">Voir plus</button>
        <div class="title">
            <p>Dashboard</p>
            <p>Newsletter website</p>
        </div> 
        </div>
    </div>
</body>
</html>