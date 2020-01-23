//Toggles the side bar.
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

//Standard form submission validation.
function formSubmit(){
    var form = document.getElementById("submit");
    var name = document.getElementById("name");
    var last = document.getElementById("last");
    var email = document.getElementById("email");
    var result = document.getElementById("result");

    if(name.value == ""){
        name.focus();
        result.innerHTML = "First name cannot be blank.";
        result.style.color = "red";
    }
    else if(last.value == ""){
        last.focus()
        result.innerHTML = "Last Name cannot be blank.";
        result.style.color = "red";
    }
    else if(email.value == ""){
        email.focus();
        result.innerHTML = "Email cannot be blank.";
        result.style.color = "red";
    }
    else{
        form.submit();
    }
}

//Checks the amount for the payment page.
function checkAmt(){
    var form = document.getElementById("form");
    var amt = document.getElementById("amt");

    if(amt.value <= 0){
        alert("You must enter a payment amount of .01 or greater.");
        amt.focus();
    }else{
        form.submit();
    }
}









window.addEventListener('scroll', function(){
    var shadow = "0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)"
    var sand = document.getElementById("sand");
    var navText = document.getElementById("navText");
    var back = document.getElementById("navBackground");
    if(document.body.scrollTop > 10 || document.documentElement.scrollTop > 10){
        back.style.backgroundColor = "#005287";
        back.style.boxShadow = shadow;
        sand.style.color = "#F2E9BD";
        navText.style.color = "#F2E9BD";
    }else{
        back.style.backgroundColor = "transparent";
        back.style.boxShadow = "none";
        sand.style.color = "#F24405";
        navText.style.color = "#005287";
    }
})