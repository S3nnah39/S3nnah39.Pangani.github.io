/*Source: https://www.youtube.com/watch?v=B7gyTL--1Uw*/
$(document).ready(function(){
    
const button = document.querySelector(".playVid");
const close = document.querySelector(".close");
const trailer = document.querySelector(".trailer");
const video = document.querySelector("video");

button.addEventListener('click',()=>{
    trailer.style.visibility = "visible";
    trailer.style.opacity= 1;
});

close.addEventListener('click',()=>{
    trailer.style.visibility = "hidden";
    trailer.style.opacity= 0;
});
    
});