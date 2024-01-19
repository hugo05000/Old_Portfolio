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

navSlide();

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


//Barres de progression -> Profil

let number1 = document.getElementById("number1");
let number2 = document.getElementById("number2");
let number3 = document.getElementById("number3");
let number4 = document.getElementById("number4");

let counter1 = 0;
let counter2 = 0;
let counter3 = 0;
let counter4 = 0;

setInterval(() => {
    if(counter1 == 90){
        clearInterval();
    }else{
        counter1 += 1;
        number1.innerHTML = counter1 + "%";
    }

    if(counter2 == 65){
        clearInterval();
    }else{
        counter2 += 1;
        number2.innerHTML = counter2 + "%";
    }

    if(counter3 == 80){
        clearInterval();
    }else{
        counter3 += 1;
        number3.innerHTML = counter3 + "%";
    }

    if(counter4 == 65){
        clearInterval();
    }else{
        counter4 += 1;
        number4.innerHTML = counter4 + "%";
    }
},20);

