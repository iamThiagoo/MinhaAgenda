const modalContainer = document.querySelector(".modal-container");

function openModal(){
    modalContainer.style.top = "0%";
}

function closeModal(){
    modalContainer.style.top = "-100%";
}

const phoneInput = document.querySelector("#phone");

$(phoneInput).mask("(000) 00000-0000");