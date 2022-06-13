// ********************MENU BURGER********************
const menuHamburger = document.querySelector(".menu_hamburger")
const navLinks = document.querySelector(".nav_links")

menuHamburger.addEventListener('click',()=>{
navLinks.classList.toggle('mobile_menu')
})


// ********************MENU BURGER EN CROIX********************
const burger = document.querySelector('.burger');

burger.addEventListener('click', ()=> {
    burger.classList.toggle('active');
});


// ********************DIAPO********************
let pageContent = document.getElementById('pagecontent');

// ********************DIV CONTENANT IMAGES ET TEXTES********************
let pictInfo = document.getElementById('pictinfo');

// ********************CREATION JSON********************
let rawImages = '[{"filename":"img1.png","name":"Le calendrier lunaire","author":"La phase de lune est en fait la plus vieille complication à avoir été utilisée par l’homme. Les montres à phase de lune sont étroitement liées aux montres à calendrier perpétuel. Elles sont inventées par Thomas Mudge en 1762 sous formes de montres à gousset, elles ne seront en revanche brevetées qu’en 1898 par Patek Philippe:Rolex introduit quant à elle sa première version de montre à phase de lune en 1949: il s’agit de la 8171. On peut la trouver notamment sur des marketplace comme Chrono 24 (d’où sont issues ces photos). Il s’agit d’un modèle Triple Calendar qu’on appelle « Padellone » (ce qui veut dire poêle en italien, en référence à son diamètre de 38mm très imposant pour l’époque). Le background bleu assez flamboyant a notamment inspiré la Cellini.","exposure":"Explorer"},{"filename":"img2.png","name":"La montre gousset","author":"La montre à gousset a vu le jour grâce à l’inventivité et l’esprit créatif de Jules Audemars et de l’aide de son associé Edward Piguet qui vont fonder en 1882 la Fondation de Audemars Piguet & cie. Cette fondation sera à l’origine de la première montre à gousset. Il existait bien avant la date de création de ce garde-temps universel de modèle de montre de poche mais qui n’avait pas de ressemblance avec les modèles que nous connaissons actuellement. C’est un instrument inscrit dans l\'histoire de nos civilisations depuis fort longtemps. Elles ont une fonction bien utile d\'indication de l\'heure, mais font aussi partie intégrantes des montres mixtes.","exposure":"Explorer"},{"filename":"img3.png","name":"Chronographe ou chronomètre ?","author":"Aujoud\'hui, l\'affirmation semble évidente. Cela n’a pas toujours été le cas: le chronographe ne s’est pas tout de suite porté, ni appelé de la sorte. L’invention de Nicolas Rieussec (1821) portait pourtant bien son nom : « chrono-graphe », elle, déposait littéralement une goutte d’encre sur un cadran de manière à visualiser le temps écoulé. Mais aujourd’hui, le chronomètre occupe à ses côtés une place de choix. Quelle différence ? La précision du chronomètre est garantie par une certification indépendante. Cette certification est le plus souvent donnée par le COSC, Contrôle Officiel Suisse des Chronomètres. D’autres institutions, à l’instar des observatoires, peuvent également l’attribuer, sous réserve que soient respectés les mêmes critères de tests.","exposure":"Explorer"},{"filename":"img4.png.jpg","name":"La montre bijou","author":"Bien que la montre-bracelet connaisse son avènement il y a un peu plus d’un siècle, on rapporte que la première fut créée en 1812.Suite à une commande de la sœur de Napoléon, Caroline Murat, Abraham-Louis Breguet, célèbre horloger, réalise sur mesure la Reine de Naples.Par la suite, la montre-bracelet, qui est imprécise du fait de sa petite taille, devient un accessoire réservé surtout à la gente féminine. C’est toujours dans la poche de la veste prévue à cet effet que les hommes gardent leur montre à gousset","exposure":"Explorer"}]';
let images = JSON.parse(rawImages);


// ********************AFFICHAGE ALEATOIRE DU DIAPO********************
let randomImage = images[Math.floor(Math.random() * images.length)];
//pageContent.style.backgroundImage = `url(images/${(images[2].filename})`;

//  ********************VIDER CONTENU DE LA DIV PICTINFO********************
// while(pictInfo.firstChild){
//     pictInfo.removeChild(pictInfo.firstChild);
// };

// // ********************AFFICHER LE TITRE SUR LE BON DIAPO********************
// let pictTitle = document.createElement('h2');
// let picTitleContent = document.createTextNode(randomImage.name);
// pictTitle.appendChild(picTitleContent);
// pictInfo.appendChild(pictTitle);

// // ********************AFFICHER LE BON CONTENU********************
// let pictAuthor = document.createElement('p');
// let picData = document.createElement('p');
// let pictAuthorContent = document.createTextNode(randomImage.author);
// let picDataContent = document.createTextNode(randomImage.exposure);
// picData.classList.add('exp');
// pictAuthor.appendChild(pictAuthorContent);
// picData.appendChild(picDataContent);
// pictInfo.appendChild(pictAuthor);
// pictInfo.appendChild(picData);


document.body.onload = function (){
    nbr = 4;


    container=document.getElementById("container");
    g=document.getElementById("g");
    d=document.getElementById("d");

    container.style.width=(45*nbr)+"vw";

}
let i=1
   d.onclick=function (){
         if (i==4){i=4}else{i=i+1}
        //  //POUR LA TRANSITION IMAGES
        //  setTimeout(() => {
        //     images[i].classList.add('show');
        // }, 1000)
        console.log(i)
        document.querySelector(".photo").style.backgroundImage=`url("images/img`+i+`.png")`;
        document.querySelector("#pictinfo h2").textContent=images[i-1].name;
        document.querySelector("#pictinfo p").textContent=images[i-1].author;
        document.querySelector("#pictinfo a").textContent=images[i-1].exposure;
        afficherMasquer(i);
    };

    g.onclick=function (){
            if (i==1){i=1}else{i=i-1}
        
            console.log(i)
            document.querySelector(".photo").style.backgroundImage=`url("images/img`+i+`.png")`;
            document.querySelector("#pictinfo h2").textContent=images[i-1].name;
            document.querySelector("#pictinfo p").textContent=images[i-1].author;
            document.querySelector("#pictinfo a").textContent=images[i-1].exposure;
            afficherMasquer(i);
    };

  function afficherMasquer(am){
   if (am==1){
   g.style.visibility = "hidden";}
   else{
   g.style.visibility = "visible";}
          if(am==4){
  d.style.visibility = "hidden";
          }else{
   d.style.visibility = "visible";
 };}


 // ********************CROQUIS********************
 function myFunction() {
    if (window.matchMedia("(max-width: 500px)").matches) {
        po3=document.querySelector('.position3');
        po3.classList.add('hidden');
        po4=document.querySelector('.position4');
        po4.classList.add('hidden');  
    } else {
      po3.classListadd('visible');
    }
  }
  myFunction()
 
    const myInterval = setInterval(unSur2, 5000);

var x=1;

function unSur2(){
x++
    if (x%2 == 0){changePo()}else{changePo2()}
}
  function changePo() {
    po2 = document.querySelector('.position2');
    po2.classList.add('hidden');
    po1 = document.querySelector('.position1');
    po1.classList.add('hidden');
    po3=document.querySelector('.position3');
        po3.classList.remove('hidden');
        po4=document.querySelector('.position4');
        po4.classList.remove('hidden'); 
    console.log(po2);
    
  }
  
  function changePo2() {
    po2 = document.querySelector('.position2');
    po2.classList.remove('hidden');
    po1 = document.querySelector('.position1');
    po1.classList.remove('hidden');
    po3=document.querySelector('.position3');
        po3.classList.add('hidden');
        po4=document.querySelector('.position4');
        po4.classList.add('hidden'); 
    console.log(po2);
    
  }
  function stopColor() {
    clearInterval(myInterval);
  }




