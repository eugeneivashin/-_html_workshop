textAnimation();

const { text } = require("express");



function Fade(x){
    x.style.opacity = 0.5;
}
function Show(x){
    x.style.opacity = 1;
}

function changePic(x){
    x.src="https://www.w3schools.com/w3images/la.jpg"
}
function returnPic(x){
    x.src="https://www.w3schools.com/w3images/bandmember.jpg"
}

function rotateImg(x){
    x.style.transform = "rotate(7deg)";
}
function rotateBack(x){
    x.style.transform = "rotate(0deg)";
}

function textAnimation(){
    x = document.getElementById("animation");
    let id = null;
    let size = 40;
    let z = 1;
    clearInterval(id);
    id = setInterval(frame,10);
    function frame(){
        if(size == 60)
        {
            z = -1;
        }else if(size == 40){
            z = 1; 
        }
        size = size + z;
        x.style.fontSize = size + "px";
    }
}