import './bootstrap.js';
var opener = false;
var togleris = document.getElementById("toggle");
var tekstas = document.getElementById("teks");
togleris.onclick = function () {
    if (opener) {
        togleris.src = "http://127.0.0.1:8000/toggle_icon.png";
        console.log(togleris.src);
        tekstas.style.visibility = "hidden";
        opener = false;
    } else {
        togleris.style.width = "32px";
        togleris.src = "http://127.0.0.1:8000/times_icon.png";
        tekstas.style.visibility = "visible";
        opener = true;      
    }
    
}