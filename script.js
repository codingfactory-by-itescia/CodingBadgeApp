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
    if(identifiant == 'matthieu' && password == 'root'){
        window.location = "admin-page/index.html";
        generateQRCode()
    } else{
        $('#unmame').css("border-bottom","2px solid #ff0000");
        $('#password').css("border-bottom","2px solid #ff0000");
        setTimeout(function(){
            $('#unmame').css("border-bottom","2px solid #404040");
            $('#password').css("border-bottom","2px solid #404040");
        },500);
    }
}




var qr;
(function () {
    qr = new QRious({
        element: document.getElementById('qr-code'),
        size: 200,
        value: 'https://studytonight.com'
    });
})();

function generateQRCode() {
    var qrtext = $("#unmame").val();
    let id = localStorage.setItem("id",qrtext);
    qr.set({
        foreground: 'black',
        size: 200,
        value: qrtext
    });
}