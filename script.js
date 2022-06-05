
// //****************MENU BURGER****************
const menuHamburger = document.querySelector(".menu_hamburger")
const navLinks = document.querySelector(".nav_links")

menuHamburger.addEventListener('click',()=>{
navLinks.classList.toggle('mobile_menu')
})


//********************MENU BURGER EN CROIX****************/
const burger = document.querySelector('.burger');

burger.addEventListener('click', ()=> {
    burger.classList.toggle('active');
});


// **********************DIAPO*****************************