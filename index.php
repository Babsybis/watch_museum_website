<?php
require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__. '/admin/');
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

    $sth = $conn->prepare("INSERT INTO register_newsletter (mail) VALUES (:email)");
    //prepare la commande sql
    $sth -> bindParam(":email", $_POST['eMail']);
    //definition de la variable
    $sth -> execute(["email" => $_POST['eMail']]);
    //execute la commande sql

} catch(PDOException $e) {
        //gestion des erreurs 
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le musée de la montre à Villers</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <!-- ******************NAVBAR ET LOGO********************* -->
        <nav class="navbar">
            <p class="logo"><span>m</span>usée</p>
            <div class="nav_links">
                <ul>
                    <li class="active"><a href="#pagecontent">Expositions</a></li>
                    <li><a href="#visites">Visite</a></li>
                    <li><a href="#contacts">Contact</a></li>
                </ul>
            </div>
            <div class="menu_hamburger burger">
                <span></span>
            </div>
            <!-- <img src="images/menu.png" alt="menu hamburger" class="menu_hamburger" width="50px" height="50px"> -->
        </nav>
    </header>
    <!-- *************************1ere SECTION******************** -->
    <div class="museum">
        <h1>Musée de la <br>montre Villers</h1>
    </div>

    <!-- **********************2eme SECTION************************ -->
    <section id="pagecontent">
        <img src="images/chevron.webp" alt="bouton diapo suivante droite" class="bouton" id="d"> 
        <img src="images/chevron.webp" alt="bouton diapo suivante gauche" class="bouton" id="g">


           
            <h2 class="titre">Le calendrier Lunaire</h2>
            <p class="paraph">La phase de lune est en fait la plus vieille complication qui utilisée par l’homme. Les montres à phase de lune sont étroitement liées aux montres à calendrier perpétuel. Elles sont inventées par Thomas Mudge en 1762 sous formes de montres à gousset, elles ne seront en revanche brevetées qu’en 1898 par Patek Philippe. Rolex introduit quant à elle sa première version de montre à phase de lune en 1949: il s’agit de la 8171. On peut la trouver notamment sur des marketplace comme Chrono 24. Il s’agit d’un modèle Triple Calendar qu’on appelle « Padellone » (ce qui veut dire poêle en italien, en référence à son diamètre de 38mm très imposant pour l’époque). Le background bleu assez flamboyant a notamment inspiré la Cellini.</p>
            <a class="exp lien" href="#visites">Organisez votre visite</a>
          

    
        
        <div class="carrousel">
            <div id="container">
                <div class="photo">
    
                </div>
            </div>
        </div>
    </section>

    <!-- **********************3eme SECTION************************ -->
    <section class="croquis">
        <div class="contain">
            <article class="position1">
                <img class="bloc" src="images/croquis_4.webp" alt="montre de poche en croquis" width="" height="300" >
                <img class="roue"src="images/roue.webp" alt="Roue engrenage" width="" height="" id="une">
                <img class="roue"src="images/roue.webp" alt="Roue engrenage" width="" height="" id="deux">
                <img class="roue"src="images/roue2.webp" alt="Roue engrenage" width="" height="" id="trois"> 
                             
            </article>
                
            <article class="position2">
                <img class="bloc"src="images/croquis_2.webp" alt="montre vue de face en croquis" width="" height="300" >
                <p>L'habillage est l'ensemble des parties constitutives de la montre entourant, habillant, le mouvement, donnant à la montre son esthétique, permettant l'indication de toutes ses fonctions. Le boîtier est la protection de l'ensemble : « mouvement / cadran / aiguilles ». Il est également l'élément principal de la personnalisation du modèle de montre</p>
            </article>

            <article class="position3">
                <div class="bloc cadre">
                    <div class="clock">
                        <div class="outer-clock-face">
                            <div class="marking marking-one"></div>
                            <div class="marking marking-two"></div>
                            <div class="marking marking-three"></div>
                            <div class="marking marking-four"></div>
                        </div>
                        <div class="inner-clock-face">
                        </div>
                        <div class="hand hour-hand"></div>
                        <div class="hand min-hand"></div>
                        <div class="hand second-hand"></div>
                    </div>
            </div>
                <p>La révolution ne s’est pas cantonnée aux industries horlogères suisses et nippones, elle s’est étendue outre-Atlantique. De fait, la firme américaine Hamilton Watch Co. (Lancaster, Pennsylvanie) a présenté en avril 1972 la toute première montre numérique au monde. Surnommé la Pulsar, ce garde-temps est composé d’un boîtier en or et d’un écran LED. L’affichage de l’heure est bien évidemment digital, ce qui a fait son succès.</p>
            </article>

            <article class="position4">
                <img class="bloc"src="images/croquis_1.webp" alt="montre homme et femme en croquis vue de face" width="300" height="300">
                <p>Pour parvenir à concevoir une montre, il faut du temps. Les horlogers, les ingénieurs, les créateurs, les dessinateurs, les designers… Tous, travaillent dans à la conception des montres. Ces spécialistes ont suivi des formations de plusieurs années, avant d’arriver à un niveau de maîtrise suffisant pour exercer leur art .</p>
                
                </div>
            </article>
        </div>
    </section>
    <!-- **********************4eme SECTION************************ -->
    <section class="contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2718.0760201573044!2d6.667857915516226!3d47.058359079152176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478dee8a16e508c5%3A0x993ac95f78bc7fdc!2sMusee%20De%20La%20Montre!5e0!3m2!1sfr!2sfr!4v1652693738346!5m2!1sfr!2sfr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- **********************5eme SECTION************************ -->
    <section class="pele_mele background">
        <article class="contain_pm">
                <img class="background_pm" src="images/pele_mele.webp" alt="pêle-mêle de plusieurs photo concernant la montre, le mouvement ou le métier d'horloger.">
                    <div class="element">
                    </div>
        </article> 
        <article class="prix" id="visites">
                <div class="visite">
                
                <table>
                    <tr class="title">
                        <td>Tarifs</td>
                        <td>Individuel</td>
                        <td>Groupe</td>
                    </tr>
                    <tr>
                        <td>Adultes</td>
                        <td>6€</td>
                        <td>5,5€</td>
                    </tr>
                    <tr>
                        <td>Etudiants</td>
                        <td>3€</td>
                        <td>2,5€</td>
                    </tr>
                    <tr>
                        <td>12-16 ans</td>
                        <td>3€</td>
                        <td>2,5€</td>
                    </tr>
                    <tr>
                        <td>- de 12 ans</td>
                        <td>Gratuit</td>
                        <td>Gratuit</td>
                    </tr>
                    <tr class="border">
                        <td>Demandeurs d'emploi</td>
                        <td>3€</td>
                        <td>2,5€</td>
                    </tr>
                </table>
            </div>  
            <div class="rens">
                <p>Horaires d'ouverture : <br> 
                    mardi : 14:00–17:00  <br> 
                    vendredi : 14:00–17:00</p>
            </div>

        </article>   
    </section>

    <!-- **********************FOOTER************************ -->
    <footer>
        <div class="background_footer" id="contacts">
            <img src="images/footer.webp" alt="Sablier de roues de mouvement">
            <div class="right_position">
                    <h3>  Musée de la montre Villers </h3>
                        
                    <p>  Rue Pierre Bercot,  </p>
                    <p>  25130 Villers-le-Lac   </p>
                    <p>  Tél:  06 36 56 99 11   </p>
    
            <div class="newsletter">
                <div>
                    <div class="name_form">
                        <label for="mail">Newsletter</label>
                    </div>

                        <form method="post" id="newsletter" novalidate>
               
                            <input class="form_width" type="email" name="eMail" id="eMail" placeholder="Votre adresse Email" required> 
                            <button id="button" type="submit">Envoyer</button>
                        </form>

                        
                    </div>
                </div>
            <p><span>&copy; 2022 - Le musée de la montre Villers</span></p>
        </div>
        </div>
    </footer>

</body>
</html>