//Création du tableau
// On prépare une ligne pour le tableau
const template = document.querySelector("#productrow");
//Pour communiquer avec PHP
let nombre = new FormData();
nombre.append("dixdeplus", 0);

//Fonction creation et supression ligne du tableau
function rows(myJson) {
    myJson.forEach(element => {
        // On clone la ligne et on l'insère dans le tableau
        let tbody = document.querySelector("tbody");
        let clone = document.importNode(template.content, true);
        let td = clone.querySelectorAll("td");
        td[0].textContent = element["mail"];
        td[1].textContent = element["date_location"];
        td[2].setAttribute("data-value", element['id'])


        tbody.appendChild(clone);   
    });
//Au click sur la poubelle
let supp = document.querySelectorAll('.delete')
let yesNo = document.querySelector('.popup')
let yes = document.querySelector('.oui')
let no = document.querySelector('.non')

supp.forEach(element =>{
element.addEventListener('click', function (){
    yesNo.classList.add('visible')
    no.addEventListener('click', function(){
        yesNo.classList.remove('visible')
    })
    yes.addEventListener('click', function (){
        const email = element.parentElement.parentElement
        email.remove()
        let data = new FormData();
        data.append("delete", element.parentElement.dataset.value),
        //Récuperer email à supprimer dans la bdd
        fetch("delete.php", {
            method: 'POST',
            body: data 
        })
    yesNo.classList.remove('visible')
    })
    })  
});
}

    fetch("getdb.php", {
    method: 'POST',
    body: nombre })
    .then(function(response) {
        return response.json();
    })
    .then(function(myJson) {
        rows(myJson)
    })

//Au click sur le bouton voir plus
const show_more = document.querySelector('.btn_footer');
console.log(show_more);
show_more.addEventListener('click', function (){
    let delet = document.querySelectorAll('tbody tr').length
    console.log(delet)
    let data = new FormData();
    data.append("dixdeplus", delet),

    fetch("getdb.php", {
        method: 'POST',
        body: data })
    .then(function(response) {
        return response.json();
    })
    .then(function(myJson) {
        rows(myJson)
    })
})
        
    







