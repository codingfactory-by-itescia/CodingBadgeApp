function displayElem(hide, show){
    let hidetext = document.getElementById(hide);
    let showtext = document.getElementById(show);
    
    hidetext.style.display = 'none';
    showtext.style.display = 'flex';
}
