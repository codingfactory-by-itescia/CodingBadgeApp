let date = new Date();
let nbday = date.getDay();
let day = returnDay(nbday);
let mois = date.getMonth();
let month = returnMonth(mois);
let year = date.getFullYear();
let jourDuMois = date.getDate();

let board3 = [];
let board2 = [];
let board = [];
let nbMois = mois+1;
let vraiDate = year+"-"+nbMois+"-"+jourDuMois;


document.getElementById("date").innerHTML = day+" "+jourDuMois+" "+month+" "+year;
document.getElementById("hide").innerHTML = date;


function neweventDisplay(){
	document.getElementById("divNewEvent").style.display = "block";
}


function newevent(){
	let eventDate;	//normalement type date
	let eventTime;
	let eventText;
	eventDate = document.getElementById("eventDate").value;
	eventTime = document.getElementById("eventTime").value;
	eventText = document.getElementById("eventText").value;
	
	if (eventDate === ""){
		document.getElementById("erreur").innerHTML = "Veuillez entrer une date!";
		
	}else if (eventTime === ""){
		document.getElementById("erreur").innerHTML = "Veuillez entrer une heure!";
	}else if (eventText == "") {
		document.getElementById("erreur").innerHTML = "Veuillez entrer un evenement";
	}else{
		document.getElementById("erreur").innerHTML = "";
	}
	

}

function verifDate(){
	if(vraiDate == board[0]){
		document.getElementById("txt").innerHTML = board2[0]+"---------------------"+board3[0];
	}
}
	
	







function returnDay(nb){
	let jour;
	if(nb == 1)
	{
		jour = "lundi";
	}else if(nb == 2){
		jour = "mardi";
	}else if(nb == 3){
		jour = "mercredi";
	}else if(nb == 4){
		jour = "jeudi";
	}else if(nb == 5){
		jour = "vendredi";
	}else if(nb == 6){
		jour = "samedi";
	}else if(nb == 7){
		jour = "dimanche";
	}
	return jour;
}



function returnMonth(nb){
	let jour;
	if(nb == 0)
	{
		jour = "janvier";
	}else if(nb == 1){
		jour = "fevrier";
	}else if(nb == 2){
		jour = "mars";
	}else if(nb == 3){
		jour = "avril";
	}else if(nb == 4){
		jour = "mai";
	}else if(nb == 5){
		jour = "juin";
	}else if(nb == 6){
		jour = "juillet";
	}else if(nb == 7){
		jour = "aout";
	}else if(nb == 8){
		jour = "septembre";
	}else if(nb == 9){
		jour = "octobre";
	}else if(nb == 10){
		jour = "novembre";
	}else if(nb == 11){
		jour = "decembre";
	}
	return jour;
}


function transmission(date,heure,text){
	board = date;
	board2 = heure;
	board3 = text;

}