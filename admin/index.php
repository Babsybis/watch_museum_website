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
    <div class="container">
        <!-- **********HEADER************ -->
        <div class="header">
            <p class="logo"><span>m</span>usée</p>
            <div class="right">
            <a class="btn" href="www.fitness-morteau.fr">Export CSV</a>
            <img class="sortie"src="/watch_museum_website/images/logout.webp"alt="Bouton sortie">
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
            <td><img class="delete" src="/watch_museum_website/images/delete.webp" alt="Poubelle"></td>
        </tr>
        </template>
    </div>
    <!-- **********FOOTER********** -->
    <div class="footer">
        <div class="next"><img src="/watch_museum_website/images/left.webp"alt="Bouton precedent"></div>
            <a class="next" href="www.fitness-morteau.fr">1</a>
            <a class="next" href="www.fitness-morteau.fr">2</a>
            <a class="next" href="www.fitness-morteau.fr">...</a>
            <a class="next" href="www.fitness-morteau.fr">""</a>
        <div class="next"><img src="/watch_museum_website/images/right.webp"alt="Bouton suivant"></div>
    </div>
        
        

    
</body>
</html>