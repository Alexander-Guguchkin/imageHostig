"use strict"

const activeForm = document.querySelector("#activeForm");
const formWrap = document.querySelector(".wrap__form");
const closeForm = document.querySelector(".close");

activeForm.addEventListener("click", ()=>{
    formWrap.style.display = "block";

});


closeForm.addEventListener("click", ()=>{
    formWrap.style.display = "none";
});