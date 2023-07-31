// .............. Bar Button
let barbutton= document.querySelector(".fa-bars");
let navbar= document.getElementById("navbar");
let xmark = document.querySelector(".fa-xmark");

barbutton.addEventListener("click",()=>{
  barbutton.classList.add("none");
  xmark.classList.add("block");
  navbar.classList.add("open");
});

xmark.addEventListener("click",()=>{
  barbutton.classList.remove("none");
  xmark.classList.remove("block")
  navbar.classList.remove("open");
});


// .........................Contact Form

let form = document.querySelector("#form");
form.addEventListener("submit",()=>{
  alert("Your Message Is Done Successfully ✔💌");
});

