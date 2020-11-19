let actualPage = "home";

function displayPage(page){
    document.getElementById(actualPage).style.display = "none";
    let pageToDisplay = document.getElementById(page);
    pageToDisplay.style.display = "flex";
    actualPage = page;
}
function saveName(){
    let id = localStorage.setItem("name",$("#username").val());
}