//Barre de navigation

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click',()=>{
        //Toggle Nav
        nav.classList.toggle('nav-active');

        //Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation){
                link.style.animation = ''
            }
            else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });
        //burger Animation
        burger.classList.toggle('toggle');
    });
}

$(document).ready(function() {
    $("#nav-placeholder").load("navbar.html", function() {
        // Cette fonction sera exécutée après que la barre de navigation soit chargée
        navSlide();
    });
});


// Fonction pour vérifier si l'élément est visible dans la fenêtre
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
}

const boxes = document.querySelectorAll('.box');

window.addEventListener('scroll', () => {
    boxes.forEach((box) => {
        if (isInViewport(box)) {
            box.classList.add('visible');
        }
    });
});

// Exemple de basculement horizontal ou vertical
document.querySelectorAll('.box').forEach((box) => {
    // Ajoutez la classe "vertical" pour une animation verticale
    if (box.dataset.animation === "vertical") {
        box.classList.add('vertical');
    }
});

//Modals

const modalContainerAgra = document.querySelector(".modal-container-agra");
const modalContainerMa = document.querySelector(".modal-container-ma");
const modalContainerCv = document.querySelector(".modal-container-cv");

const modalTriggersAgra = document.querySelectorAll(".modal-trigger-agra");
const modalTriggersMa = document.querySelectorAll(".modal-trigger-ma");
const modalTriggersCv = document.querySelectorAll(".modal-trigger-cv");

modalTriggersAgra.forEach(trigger => trigger.addEventListener("click", toggleModalAgra))
modalTriggersMa.forEach(trigger => trigger.addEventListener("click", toggleModalMa))
modalTriggersCv.forEach(trigger => trigger.addEventListener("click", toggleModalCv))


function toggleModalAgra(){
  modalContainerAgra.classList.toggle("active")
}

function toggleModalMa(){
    modalContainerMa.classList.toggle("active")
}

function toggleModalCv(){
    modalContainerCv.classList.toggle("active")
}
