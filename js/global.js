function showRegisterPopup(){
    document.getElementById("registerPopup").style.visibility = 'visible';
    document.getElementById("actualPage").style.opacity = "0.4";
    document.getElementById("registerPopup").style.zIndex = "10";
}
function hideRegisterPopup(){
    document.getElementById("registerPopup").style.visibility = 'hidden';
    document.getElementById("actualPage").style.opacity = "1";
    document.getElementById("registerPopup").style.zIndex = "0";
}