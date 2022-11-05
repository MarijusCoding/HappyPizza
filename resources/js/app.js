import './bootstrap.js';
var opener = false;
var togleris = document.getElementById("toggle");
var tekstas = document.getElementById("teks");
var tex = document.getElementById("hambur");
var navas = document.getElementById("navas");
togleris.onclick = function () {
    if (opener) {
        togleris.src = "http://127.0.0.1:8000/toggle_icon.png";
        console.log(togleris.src);
        // navas.style.backgroundColor = "#ef4444 !important";
        // tex.style.opacity = "0";
        tekstas.style.display = "none";
        opener = false;
    } else {
        togleris.style.width = "32px";
        togleris.src = "http://127.0.0.1:8000/times_icon.png";
        
        // tex.style.opacity = "1";
        tekstas.style.display = "flex";
        opener = true;      
    }
    
}

// var toggler = document.getElementById("toggle"); // Jungtukas
