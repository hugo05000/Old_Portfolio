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
    $("#nav-placeholder").load("navbar", function() {
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

const modalContainers = {
    agra: document.querySelector(".modal-container-agra"),
    maStage: document.querySelector(".modal-container-ma-stage"),
    maAlternance: document.querySelector(".modal-container-ma-alternance"),
    ta: document.querySelector(".modal-container-ta"),
    mairie: document.querySelector(".modal-container-mairie"),
    camping: document.querySelector(".modal-container-camping"),
    on: document.querySelector(".modal-container-on"),
    presse: document.querySelector(".modal-container-presse"),
    cv: document.querySelector(".modal-container-cv")
};

const modalTriggers = {
    agra: document.querySelectorAll(".modal-trigger-agra"),
    maStage: document.querySelectorAll(".modal-trigger-ma-stage"),
    maAlternance: document.querySelectorAll(".modal-trigger-ma-alternance"),
    ta: document.querySelectorAll(".modal-trigger-ta"),
    mairie: document.querySelectorAll(".modal-trigger-mairie"),
    camping: document.querySelectorAll(".modal-trigger-camping"),
    on: document.querySelectorAll(".modal-trigger-on"),
    presse: document.querySelectorAll(".modal-trigger-presse"),
    cv: document.querySelectorAll(".modal-trigger-cv")
};

// Fonction pour basculer les modales
function toggleModal(modalName) {
    console.log(modalName);
    modalContainers[modalName].classList.toggle("active");
}

// Ajout des Event Listeners de manière dynamique
Object.keys(modalTriggers).forEach(modalName => {
    modalTriggers[modalName].forEach(trigger => {
        trigger.addEventListener("click", () => toggleModal(modalName));
    });
});