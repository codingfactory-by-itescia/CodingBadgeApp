let userid = $("#userid");
let connected = $("#connect");
let user = localStorage.getItem("user");

if(user === null){
    connected.text("Erreur, Vous n'êtes pas connecté");
} else {
    userid.text(' '+ user);
}