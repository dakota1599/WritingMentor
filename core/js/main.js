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