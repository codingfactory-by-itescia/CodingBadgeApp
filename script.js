let actualPage = "home";

function displayPage(page){
    document.getElementById(actualPage).style.display = "none";
    let pageToDisplay = document.getElementById(page);
    pageToDisplay.style.display = "flex";
    actualPage = page;
}

function validateLogin(){
    let identifiant = $("#unmame").val();
    let password = $("#password").val();
    if(identifiant == 'root' && password == 'root'){
        window.location = "admin-page/index.html";
    } else{
        $('#unmame').css("border-bottom","2px solid #ff0000");
        $('#password').css("border-bottom","2px solid #ff0000");
        setTimeout(function(){
            $('#unmame').css("border-bottom","2px solid #404040");
            $('#password').css("border-bottom","2px solid #404040");
        },500);
    }
}