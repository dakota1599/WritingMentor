function toggle(){
    var bar = document.getElementById("bar");
    
    if(bar.classList.contains("w3-hide")){
        bar.className = bar.className.replace("w3-hide", "");
    }else{
        bar.className += " w3-hide";
    }
}
function close(){
    document.getElementById("Sidebar").style.display = "none";
}

window.addEventListener('scroll', function(){
    var shadow = "0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)"
    var sand = document.getElementById("sand");
    var back = document.getElementById("background");
    if(document.body.scrollTop > 10 || document.documentElement.scrollTop > 10){
        sand.style.backgroundColor = "#005287";
        sand.style.boxShadow = shadow;
        sand.style.color = "white";
    }else{
        sand.style.backgroundColor = "transparent";
        sand.style.boxShadow = "none";
        sand.style.color = "#F24405";
    }
})